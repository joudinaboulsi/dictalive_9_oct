<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\About;
use App\Contact;
use App\ServiceCentre;
use App\Reputation;
use App\Blog;
use App\BlogDetail;
use App\Dictasupport;
use App\HomePage;
use App\Settings;
use App\SliderText;
use App\FooterPage;
use App\Faq;
use SEO;
use SEOMeta;
use App\SeoPage;
use App\TitlePage;
use App\OptionForm;





class PageController extends Controller
{



    public function __construct()
    {
        app()->singleton('contact', function(){
            $settings = Settings::where('id','1')->get();
            return $settings[0];
        });
        app()->singleton('frappe', function(){
            $service = ServiceCentre::where('id',1)->get();
            return $service[0];
        });
        app()->singleton('appels', function(){
            $service1 = ServiceCentre::where('id',2)->get();
            return $service1[0];
        });
        app()->singleton('eva', function(){
            $service2 = ServiceCentre::where('id',3)->get();
            return $service2[0];
        });

        app()->singleton('blog', function(){
            $blog = Blog::where('id',1)->get();
            return $blog[0];
        });

    }

    public function setSeo($page_data)
    {
        //get url of the page
        $url = url()->current();

        SEO::setTitle($page_data->meta_title, false);
        SEO::setDescription($page_data->meta_description, false);
        SEOMeta::setKeywords($page_data->meta_keywords, false);
       
        if($page_data->image != NULL) // check if we have an OG image
            SEO::addImages(getenv('APP_URL').'/assets/seo/'.$page_data->image); 
    }

    public function home()
    {
        $page_data =SeoPage::where('id',1)->get();
        $this->setSeo($page_data[0]);
        $home=HomePage::where('id',1)->get();
        $blogs = BlogDetail::latest()->take(3) ->orderBy('id', 'desc')->get();
        $sliders = SliderText::where('id',1)->get();
        return view('pages.home',compact('home','blogs','sliders','page_data'));
    }


    public function about()
    {
        $page_data =SeoPage::where('id',2)->get();
        $this->setSeo($page_data[0]);

        $page_contact=SeoPage::where('id',9)->get();
        $this->setSeo($page_data[0]);

        $about= About::where('id',1)->get();
        $contact= Contact::where('id',1)->get();
        $options = OptionForm::all();
        // dd($options);
        return view('pages.about',compact('about','contact','page_data','page_contact','options'));
    }


    public function centredefrappe()
    {
        $page_data =SeoPage::where('id',3)->get();
        $this->setSeo($page_data[0]);

        $services = ServiceCentre::where('id',1)->get();
        return view('pages.centredefrappe',compact('services','page_data'));
    }


    public function centredappels()
    {
        $page_data =SeoPage::where('id',4)->get();
        $this->setSeo($page_data[0]);
        $services1 = ServiceCentre::where('id',2)->get();
        return view('pages.centredappels',compact('services1','page_data'));
    }



    public function eva()
    {
        $page_data =SeoPage::where('id',5)->get();
        $this->setSeo($page_data[0]);
        $services2 = ServiceCentre::where('id',3)->get();

        return view('pages.e-va',compact('services2','page_data'));
    }


    public function reputation()
    {
        $page_data =SeoPage::where('id',6)->get();
        $this->setSeo($page_data[0]);
        $reputations = Reputation::where('id',1)->get();
        return view('pages.reputation',compact('reputations','page_data'));
    }


    public function dictasupport()
    {
        $page_data =SeoPage::where('id',7)->get();
        $this->setSeo($page_data[0]);
        $dictasupport = Dictasupport::where('id',1)->get();
        return view('pages.dictasupport',compact('dictasupport','page_data'));
    }


    public function blog()
    {
        $page_data =SeoPage::where('id',8)->get();
        $this->setSeo($page_data[0]);
        $blog_content = Blog::where('id',1)->get();
        $blogs = BlogDetail::all();
        return view('pages.blog',compact('blog_content','blogs','page_data'));
    }


    public function blogdetails($id)
    {
        $page_data =SeoPage::where('id',11)->get();
        $this->setSeo($page_data[0]);
        $blogs =BlogDetail::where('id','!=',$id)->get();
 
        $blog= BlogDetail::where('id', $id)->get();
        $related= TitlePage::where('id', 2)->get();
        
        return view('pages.blog-details',compact('blog','blogs','page_data','related'));
    }

    public function footerpages()
    {

        $page_data =SeoPage::where('id',10)->get();
        $this->setSeo($page_data[0]);
       
        $faqs = Faq::All();
        $politique= FooterPage::where('id',1)->get();
        $cookies= FooterPage::where('id',2)->get();
        $mentions= FooterPage::where('id',3)->get();
        $title_faq= TitlePage::where('id', 1)->get();
        return view('pages.footerpages',compact('faqs','politique','cookies','page_data','mentions','title_faq'));
    }



    public function getContactForm(Request $request)

        {  
            // dd($request);
            $inquiry = $request->input('inquiry');
            $name = $request->input('name');
            $email_client = $request->input('email');
            $phone = $request->input('phone');
            $profession = $request->input('profession');
            $msg_client = $request->input('message');

            // if form is full
            if (! empty($_POST))
            {
                Mail::send('emails.contact', array('name' => $name, 'email_client' => $email_client, 'phone' => $phone, 'profession' => $profession, 'inquiry' => $inquiry, 'msg_client' => $msg_client), function($message) use ($email_client, $name)
                {
                    $message->from($email_client, $name);
                    $message->to('theresasawaya1@gmail.com')->subject('Message from Website');
                });
                \Session::flash('msg', 'Successfully sent!' );
                return redirect()->back();
            }
        }
    }
