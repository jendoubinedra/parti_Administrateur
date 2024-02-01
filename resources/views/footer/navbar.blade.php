
<style>
    *, *::before, *::after{
	box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body{
  color:#222;
  font-family: system-ui, sans-serif;
  padding-bottom: 50px;
}

.container{
  max-width: 1200px;
  margin: 0 auto;
}

.nav{
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  background-color: #222;
  transition: all 0.3s ease-in-out;
}

.nav .container{
  display: flex;
  justify-content: space-between;
  padding: 20px 0;
  transition: all 0.3s ease-in-out;
}

.nav ul {
  display: flex;
  align-items: center;
  list-style: none;
  justify-content: center;
}

.nav a{
  text-decoration: none;
  color: #fff;
  padding: 7px 15px;
  transition: all 0.3s ease-in-out;
}

.nav.active{
  background-color: #fff;
  box-shadow: 0  2px 10px rgba(0, 0, 0, 0.3);
}

.nav.active a{
  color: #222;
}

.nav.active .container{
  padding: 10px 0;
}

.nav a.current, .nav a:hover{
  color:#D80032;
  font-weight: bold;
}

.hero{
    background-image: url('https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: bottom-center;
  height:100vh;
  color:#fff;
  display: flex;
  align-items:center;
  justify-content: center;
  position: relative;
  margin-bottom: 20px;
  z-index: -2;
}

.hero::before{
  content:'';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: -1;
}

.hero h1{
  font-size: 46px;
  margin: -20px 0 20px;
}

.hero p{
  font-size: 20px;
  letter-spacing: 1px;
}

.content h2, .content h3{
  font-size: 150%;
  margin: 20px 0;
}

.content p {
  color: #555;
  line-height: 1.6;
  letter-spacing: 1px;
}
</style>

<nav class="nav">
    <div class="container">
      <h1 class="logo"><a href="#">My website</a></h1>
      <ul>
        <li><a href="# current">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>

      </ul>
    </div>
  </nav>

  <div class="hero">
    <div class="container">
      <h1>Welcome to our website</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, repudiandae.</p>
    </div>
  </div>

  <section class="container content">
    <h2>content 1</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque, animi sunt! Libero optio, asperiores quis ipsa eum eveniet labore nihil expedita nostrum laborum dicta at deleniti sapiente atque assumenda quo corrupti exercitationem animi minus nemo vero soluta alias perspiciatis! Aspernatur, laborum consectetur repellat repellendus aliquam sed. Cupiditate accusantium porro at quae, maxime itaque accusamus! Ipsam tempore, illo similique officia neque asperiores eveniet omnis rem veritatis cumque quos amet placeat dignissimos quisquam nesciunt quas. Adipisci perspiciatis veniam, voluptatibus dolores doloremque quisquam qui possimus, vero ab dolorum temporibus soluta libero similique assumenda debitis dolorem ut perferendis incidunt nobis facere eaque. Enim, nemo?</p>
    <h3>content 2</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque, animi sunt! Libero optio, asperiores quis ipsa eum eveniet labore nihil expedita nostrum laborum dicta at deleniti sapiente atque assumenda quo corrupti exercitationem animi minus nemo vero soluta alias perspiciatis! Aspernatur, laborum consectetur repellat repellendus aliquam sed. Cupiditate accusantium porro at quae, maxime itaque accusamus! Ipsam tempore, illo similique officia neque asperiores eveniet omnis rem veritatis cumque quos amet placeat dignissimos quisquam nesciunt quas. Adipisci perspiciatis veniam, voluptatibus dolores doloremque quisquam qui possimus, vero ab dolorum temporibus soluta libero similique assumenda debitis dolorem ut perferendis incidunt nobis facere eaque. Enim, nemo?</p>
  </section>
<script>
    const nav = document.querySelector('.nav');

window.addEventListener('scroll', fixNav);

function fixNav(){
  if(window.scrollY > nav.offsetHeight + 150){
    nav.classList.add('active');
  }else{
    nav.classList.remove('active');
  }
}

</script>
