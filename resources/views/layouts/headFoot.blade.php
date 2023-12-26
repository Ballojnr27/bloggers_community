<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggers Community</title>

	<!-- styles -->
    <link href="{{ asset('css/headFoot.css') }}" rel="stylesheet">

</head>
<body>
<header>
<div class="container">
<div id="branding">
<span class="highlight"> <img src="img/dollar.jpg" width="28px" alt="logo"> Bloggers Community</span> 




</div>
</header>
<nav>

<div class="sidebar"> 
		<ul>
		
		<li> <a href="/home" class="primary">Home</a></li>
		<li> <a href="/profile"class="primary">My Profile</a></li>		
		<li> <a href="/create"class="primary">Create Blog</a></li>
		<li> <a href="/blog_feed"class="primary">Blog Feed</a></li>
        <li> <a href="/my_blogs"class="primary">My Blogs</a></li>
      
        <li>
        <a class="dropdown-item primary" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
        </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none primary">
                    @csrf
             </form>
             </li>
      </ul>
</div>
</nav>

<button class="toggle-button">&#9776;</button>
	<script>
		const toggleButton = document.querySelector('.toggle-button');
		const sidebar = document.querySelector('.sidebar');

		toggleButton.addEventListener('click', () => {
			sidebar.classList.toggle('show');
		});
	</script>




@yield('content')

<footer>
<h3>Bloggers community Copyright &copy; 2023</h3>
</footer>
</body>
</html>