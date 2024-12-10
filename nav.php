<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar">
  <div class="navbar-brand">Logo</div>
  <ul class="navbar-nav">
    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
  </ul>
  <button class="navbar-toggle" id="navbar-toggle">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
</nav>


<style>
    .navbar {
      background-color: #333;
      color: #fff;
      padding: 1em;
      text-align: center;
    }
    
    .navbar-brand {
      font-size: 1.5em;
      margin-right: 1em;
    }
    
    .navbar-nav {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: space-between;
    }
    
    .nav-item {
      margin-right: 20px;
    }
    
    .nav-link {
      color: #fff;
      text-decoration: none;
      transition: color 0.2s ease;
    }
    
    .nav-link:hover {
      color: #ccc;
    }
    
    .navbar-toggle {
      background-color: #333;
      border: none;
      color: #fff;
      font-size: 1.5em;
      cursor: pointer;
      display: none;
    }
    
    .icon-bar {
      background-color: #fff;
      display: block;
      height: 2px;
      margin: 5px 0;
      width: 20px;
    }
    
    @media (max-width: 768px) {
      .navbar-nav {
        flex-direction: column;
      }
      .nav-item {
        margin-right: 0;
      }
      .navbar-toggle {
        display: block;
      }
      .navbar-nav {
        display: none;
      }
      #navbar-toggle:checked + .navbar-nav {
        display: block;
      }
    }
</style>
<script>
    const navbarToggle = document.getElementById('navbar-toggle');
    const navbarNav = document.querySelector('.navbar-nav');
    
    navbarToggle.addEventListener('click', () => {
      navbarNav.classList.toggle('show');
    });
</script>
</body>
</html>