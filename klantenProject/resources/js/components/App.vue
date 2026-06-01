<script setup>

</script>

<template>

  <body>
   
    <nav class="navbar">
      <div class="nav-title"> student financiering</div>

        <ul class="nav-links">
        <!--dropdown started stoppen en overstappen-->
       <router-link to="/info">
         Info
       </router-link>

       <router-link to="/hbo">
         HBO
       </router-link>

       <router-link to="/opleiding">
         opleiding
       </router-link>

       <router-link to="/home">
         Home
       </router-link>

      </ul>

    </nav>


    <div class="navigators">

     <div class="info"><h1>INFO</h1></div>
     <div class="hbo"><h1>HBO</h1></div>
     <div class="opleiding"><h1>OPLEIDING</h1></div>
     <div class="lening-schulden"><h1>LENING EN SCHULDEN</h1></div>

    </div>
    
    <p></p>

  </body>

</template>

<style>

.body {
  background-color: #26115f;
}
.navbar{
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #fdfcfc;
  padding: 15px 20px;
  
}

.nav-title {
  color:black;
  font-size: 24px;
  font-weight: bold;
  font-family: Arial, sans-serif;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 20px;
}   

.nav-links a {
  text-decoration: none;
  color: #26115f;
  font-size: 18px;
  font-family: Arial, sans-serif;
}
.navigators {
  display: grid;
  margin-top: 20px;

}

h1 {
  color: #26115f;
  font-family: Arial, sans-serif;
  text-align: left;
}

.info, .hbo, .opleiding, .lening-schulden {
  background-color: #fdfcfc;
  padding: 20px;
  border-radius: 8px;
  margin-bottom: 20px;
}

.hbo, .lening-schulden {
  display: flex;
  justify-content: flex-end;
}
</style>