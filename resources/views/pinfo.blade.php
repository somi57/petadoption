<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet Information</title>
</head>
<body>
    <h1>Information here</h1>
    <form action="{{ route('pinfo.store') }}" method="post"> @csrf
        <input type="text" name="name">
        <input type="number" name="age">
        <input type="date" name="dob">
        <input type="submit" value="Submit">
    </form>

<style>
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 20px 0;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  margin-top: 20px;
}
p{
  font-weight: bold;
}

.pet {
  width: 300px;
  margin: 20px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.pet img {
  width: 90%;
  border-radius: 10px;
}

.pet h2 {
  margin-top: 5px;
}

.pet p {
  margin-top: 5px;
}
.main {
  margin: 20px 30px;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
}

button:hover {
  background-color: #45a049;
}
@media (max-width: 768px) {
  .pet {
     font-size: 14px;
     margin-top: 4px;
  }
}
</style>
    <header>
        <h1>Pet Adoption</h1>
    </header>
    <div class="container">
        <div class="pet">
          <img src="https://cdn.mos.cms.futurecdn.net/ASHH5bDmsp6wnK6mEfZdcU.jpg" alt="Dog">
          <h2>Dog</h2>
          <p>Name:Daisy</p>
          <p>Age: 3 years</p>
         <button onclick="adopt('Dog')">Adopt</button>
        </div>
        <div>
          <div class="pet">
            <img src="https://t4.ftcdn.net/jpg/06/02/74/39/360_F_602743936_qbTuk7bb34cSYBgSDbsirlmJSbxRBUFM.jpg" alt="Dog">
            <h2>Dog</h2>
          <p>Name:Max</p>
          <p>Age:2 years</p>
          <button onclick="adopt('Dog')">Adopt</button>
          </div>
        </div>
        
        <div class="pet">
          <img src="https://cdn.pixabay.com/photo/2024/02/28/07/42/european-shorthair-8601492_1280.jpg" alt="Cat">
          <h2>Cat</h2>
          <p>Name:Lily</p>
          <p>Age: 2 years</p>
          <button onclick="adopt('Cat')">Adopt</button>
          
        </div>
        <div class="pet">
          <img src="https://img.freepik.com/free-photo/cute-domestic-kitten-sits-window-staring-outside-generative-ai_188544-12519.jpg">
          <h2>Cat</h2>
          <p>Name:Tusky</p>
          <p>Age: 5 years</p>
          <button onclick="adopt('Cat')">Adopt</button>
          

        </div>

        <div class="pet">
          <img src="https://www.shutterstock.com/image-photo/red-bunny-rabbit-portrait-looking-600nw-589399619.jpg" alt="Rabbit">
          <h2>Rabbit</h2>
          <p>Name:Moon</p>
          <p>Age: 1 year</p>
          <button onclick="adopt('Rabbit')">Adopt</button>
        </div>
        <div>
          <main class="main">
  
              <section>
                  <h2 id="about-us">About Us</h2>
                  <p1>
                    The Pet Adoption System is a user-friendly online platform designed to connect animals in need of homes with caring individuals or families. This system aims to streamline the process of pet adoption, making it easier for both potential adopters and animal shelters.Through the Pet Adoption System, users can browse through profiles of animals available for adoption, including details such as species, age,  and personality traits.


                  </p1>
          </main>
        </div>
      </div>
    </body>
    </html>