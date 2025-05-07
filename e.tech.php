<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo"><img src="xs.jpg   "width=100px> </h1>
            <nav>
                <ul>
                    <li><a href="#home"><i class="fa-solid fa-house"></i>Home</a></li>
                    <li><a href="#menu"><i class="fa-solid fa-utensils"></i>Menu</a></li>
                    <li><a href="about.html"><i class="fa-solid fa-info-circle"></i>About</a></li>
                    <li><a href="contact.html"><i class="fa-solid fa-envelope"></i>Contact</a></li>
                </ul>
            </nav>
            <a href="login.html" class="btn">login</a>
        </div>
    </header>
</body>

<h1><marquer>Welcome to our shop</marquer></h1>
<div class="bd">
    
    <div class="contain">
      <div style="width: 300px; height: 200px; background-image: url(xs.jpg); margin: 5px;"><div>

        <button>view</button>
      </div>
    </div>
      <div style="width: 300px; height: 200px; background-image: url(pxfuel.com\ \(42\).jpg); margin: 5px; margin-top: 30px; padding-right: 123px;" ><div>
        <button>view</button>
      </div>
      <i class="fas fa-chalkboard-teacher"></i>
    </div>
    
    <div style="width: 300px; height: 200px; background-image: url(xs.jpg); margin: 5px;" ><div>

        <button>view</button>
      </div>
      <i class="fas fa-chalkboard-teacher"></i>
    </div>
    
    <div style="width: 300px; height: 200px; background-image: url(xs.jpg); margin: 5px; margin-top: 30px; padding-right: 123px;" ><div>
        <div class="button">
        <button>view</button>
    </div>
      </div>
      <i class="fas fa-chalkboard-teacher"></i>
    </div>
    
    <div style="width: 300px; height: 200px; background-image: url(xs.jpg); margin: 5px; margin-top: 30px; padding-right: 123px;" ><div>

        <button>view</button>
      </div>
      <i class="fas fa-chalkboard-teacher"></i>
    </div>
    <div class="contain">
        <div style="width: 300px; height: 200px; background-image: url(xs.jpg); margin: 5px;"><div>

          <button>view</button>
        </div>
      </div>
      <div class="contain">
        <div style="width: 300px; height: 200px; background-image: url(xs.jpg); margin: 5px;"><div>
          <button>view</button>
        </div>
      </div>
      <div class="contain">
        <div style="width: 300px; height: 200px; background-image: url(xs.jpg); margin: 5px;"><div>
    
          <button>view</button>
        </div>
      </div>
    </di>  
    </body>                                                                                                            



    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: gray;
            color: #180808;
        }
        header {
            
            background-image: url(pxfuel.com\ \(22\).jpg);
            padding: 15px 0;
        }
  .contact{
    background-color: #000;
    color: #ffffff;
    text-align: center;
    padding: 30px 10px;
    font-family: Arial, sans-serif;
    font-size: 16px;
    display: flex;
  }
  h1{
font-weight: 400px;
margin-top: 20px;
text-align: center;
  }
       
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            text-align: start;
        
        }
        nav ul {
            list-style: none;
            display: flex;
            background-color: gray;
            padding: 30px;
            border-radius: 13px;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            transition: color 0.3s;
            padding: 12px;
        }
        nav ul li a:hover {
            color: #ffcc00;
            border-radius: 13px;
        }
        .btn {
            background: #ffcc00;
            color: #000;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .btn:hover {
            background: white;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                text-align: center;
            }
            nav ul {
                flex-direction: column;
                margin-top: 10px;
            }
            nav ul li {
                margin: 5px 0;
            }
        }

nav ul {
    display: flex;
    margin-right: 20px;
    margin: 12px
}

nav a:hover {
    background-color: yellow;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
}

.container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

/* Box styling */
.box {
    width: 200px;
    height: 200px;
    padding: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 8px;
    text-align: center;
}

/* Background colors for different boxes */
.lightblue {
    background-color: lightgreen;
}

.lightgreen {
    background-color: lightgreen;
}

.button {
    background-color:yellow;
    color: white;
    border-radius:12px;
    width: 80px;
    height: 30px;
    text-align: center;
}


button {
    background-color:yellow;
    color: white;
    border-radius:12px;
    width: 80px;
    height: 30px;
    text-align: center;

}

button:hover {
    background-color: wheat;
    color: #fff;
}

.fas {
    font-size: 20px;
    color: black;
    margin-top: 8px;
}
.containe {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content:end; 
    align-items: end; 
}
.contain {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content:center; 
    align-items: end; 
}
        .bd {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; 
            align-items: center;
            margin-top: 10px; 
        }
        .containe {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content:end; 
            align-items: end; 
            margin-top:30px;
        }
        .contain {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content:center; 
            align-items: end; 
            margin-top: 30px;
        }
        .image{
            width: 3px;
            height: 3px;
        }
        .contact{
            margin-top: 12px;
            background-color: #ffcc00;
            padding: 12px;
            margin: 12px;
        }

</style>
</html>>