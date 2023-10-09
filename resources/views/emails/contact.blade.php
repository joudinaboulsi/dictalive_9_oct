<h1>Email from Website</h1>
<p><b>Quels services i vous intéresse:</b> {{ $inquiry }}</p>
<p><b>Name:</b> {{ $name }}</p>
<p><b>Phone:</b> {{ $phone }}</p>
<p><b>Proféssion:</b> {{ $profession }}</p>
<p><b>Email:</b> {{ $email_client }}</p>
<p><b>Message:</b> <?php $message = preg_replace('/\r\n|\r|\n/','<br/>',$msg_client); echo $message; ?></p>
