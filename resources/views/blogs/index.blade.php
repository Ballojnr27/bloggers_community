<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
    body {
	padding: 0;
	font: 15px/1.5 Arial, Helvetica, sans-serif;
    
    margin: 0 auto;
    background-color: hsla(139, 61%, 63%, 0.248);
    text-align:center ;
    min-height:4
		}


		.write-up {
  
  padding: 20px;
  margin-bottom: 10px;
font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;

}
.write-up b {
  font-size: 24px;
  color: #333;
  margin-top: 0;
  margin-bottom: 20px;
}
h1 {
  font-size: 28px;
  color: #333;
  margin-top: 0;
}
.here{
            color:black ;
        }

		


	</style>

</head>
<body>

@extends('layouts.headFoot')
    
@section('content')

	
	<div class="content">
        <center>
			<div class="write-up">

			

			<h1>Welcome, {{$user->username}}</h1>

		<p>
		Welcome to <b>Blogger Community</b>, the ultimate blogging platform designed exclusively for you! Our platform offers a wide range of features and tools to enhance your blogging experience and help you connect with a vibrant community of like-minded individuals.<br><br>

Key Features for Registered Users:<br>

Create and Personalize Your Blog: Unleash your creativity and design a blog that truly represents your unique style. Customize the layout, choose color schemes, fonts, and add personalized touches to make your blog visually appealing and distinctively yours.<br><br>

Effortless Content Creation: Our user-friendly editor makes writing and publishing blog posts a breeze. Format your posts, add images, videos, and embed media from popular platforms to create captivating and engaging content. Focus on what you do best – expressing your ideas!<br><br>

Engage with Readers: Connect with your readers through comments, likes, and shares. Foster an active and interactive community around your blog as you engage in meaningful discussions and build relationships with fellow bloggers and enthusiasts who share your interests.<br><br>

Discover Inspiring Content: Dive into a world of diverse blogs and discover fresh perspectives. Follow your favorite bloggers, stay updated with their latest posts, and explore new content that aligns with your passions. Our recommendation engine will introduce you to exciting blogs tailored to your interests.<br><br>

Mobile-Optimized Experience: Enjoy the freedom of managing your blog on the go. Our responsive design ensures that your blog looks fantastic and functions seamlessly on any device, allowing your readers to enjoy an optimal reading experience.<br><br>

Insightful Analytics: Gain valuable insights into your blog's performance with our robust analytics dashboard. Track visitor statistics, view popular posts, and measure engagement metrics to understand your audience better and refine your blogging strategy.<br><br>

Secure and Reliable: We prioritize the security and privacy of your blog and data. Rest assured that your content is protected from unauthorized access, and we regularly back up your work to ensure it's always safeguarded.<br><br>

Join <b>Bloggers Community</b> today and embark on an exciting blogging journey. Whether you want to share personal experiences, offer valuable insights, or simply connect with like-minded individuals, our platform provides the perfect space for your ideas to flourish. Start creating and sharing your unique voice with the world!


		</p>
		</div>
	</center>
    </div>
	
@endsection

</body>
</html>