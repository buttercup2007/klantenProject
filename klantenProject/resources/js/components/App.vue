<script setup>
</script>

<template>
  <nav class="navbar">
    <div class="nav-title">student financiering</div>

    <div class="nav-links">
      <router-link to="/info">Info</router-link>
      <router-link to="/hbo">HBO</router-link>
      <router-link to="/opleiding">Opleiding</router-link>
      <router-link to="/shop">Shop</router-link>
      <router-link to="/home">Home</router-link>
    </div>
  </nav>

  <div class="layout">
    
    <div class="half-circle">
      <h1>INFO</h1>

      <h2>Wat is studiefinanciering?</h2>

      <p>
         Studiefinanciering is een financiële regeling van de Nederlandse overheid
        die studenten ondersteunt tijdens hun opleiding. Het doel is om studeren
        toegankelijk te maken voor iedereen, ongeacht de financiële situatie van
        de student of diens ouders. De regeling wordt uitgevoerd door DUO
        (Dienst Uitvoering Onderwijs).
      </p>
    </div>

    <div class="white-container-info">
      <h2>Welke vormen van studiefinanciering zijn er?</h2>

      <p>
        Studiefinanciering bestaat uit verschillende onderdelen. Studenten kunnen
        recht hebben op een basisbeurs, een aanvullende beurs, een
        studentenreisproduct en verschillende soorten leningen. Welke onderdelen
        beschikbaar zijn, hangt af van de opleiding die je volgt en je
        persoonlijke situatie.
      </p>

      <p>
        De basisbeurs is bedoeld om studenten te helpen bij hun dagelijkse
        kosten. Daarnaast kunnen studenten waarvan de ouders een lager inkomen
        hebben vaak een aanvullende beurs ontvangen. Hiermee probeert de overheid
        gelijke kansen voor iedereen te creëren.
      </p>

      <h2>Studentenreisproduct</h2>
      <p>
         Met het studentenreisproduct kunnen studenten gratis of met korting
        reizen met het openbaar vervoer. Studenten kunnen kiezen tussen een
        weekabonnement of een weekendabonnement. Hierdoor wordt het makkelijker
        en goedkoper om naar school, stage of universiteit te reizen.
      </p>

      <h2>Lenen voor je studie</h2>
      <p>
         Wanneer de beurs niet voldoende is, kunnen studenten ervoor kiezen om
        geld te lenen bij DUO. Dit geld moet later worden terugbetaald. Het is
        daarom belangrijk om goed na te denken over hoeveel je leent. Hoe meer
        je leent, hoe hoger je studieschuld na het afronden van je opleiding.
      </p>

      <p>
       Gelukkig biedt DUO vaak gunstige voorwaarden. Zo hoef je meestal pas na
        je studie te beginnen met terugbetalen en wordt er rekening gehouden met
        je inkomen. Hierdoor blijft de terugbetaling voor veel afgestudeerden
        betaalbaar.

      </p>

      <h2>Waarom is het belangrijk?</h2>
      <p>
         Dankzij studiefinanciering krijgen meer mensen de mogelijkheid om een
        opleiding te volgen. Het helpt studenten zich te concentreren op hun
        studie zonder zich voortdurend zorgen te maken over geld. Daarmee draagt
        het systeem bij aan gelijke kansen en een goed opgeleide samenleving.
      </p>

      <div class="cards">
        <div class="card">
          <h3> Basisbeurs</h3>
          <p>Maandelijkse bijdrage voor studenten.</p>
        </div>

        <div class="card">
          <h3> Studentenreisproduct</h3>
          <p>Gratis of goedkoper reizen met het OV.</p>
        </div>
      </div>
    </div>

    <div class="right-panel-blue">
     
   </div>

  </div>
</template>

<style>
body {
  margin: 0;
  font-family: Arial, sans-serif; 
  background-color: #b3cde0;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #80a1b2;
  padding: 15px 20px;
}

.nav-title {
  font-size: 24px;
  font-weight: bold;
}

.nav-links {
  display: flex;
  gap: 20px;
}

.nav-links a {
  text-decoration: none;
  color: #26115f;
  font-size: 18px;
  transition: color 0.2s ease;
}

.nav-links a:hover {
  color: #c5f7f9;
}

.layout {
  display: grid;
  grid-template-columns: 350px 1fr 350px;
  gap: 20px;
  padding: 20px;
  min-height: calc(100vh - 80px);
  align-items: start;
}

.half-circle {
  background: linear-gradient(135deg, #305c71, #b8d8f5);
  color: white;

  border-radius: 0px 0px 400px 0px;

  width: 170%;
  max-height: 300px;

  padding: 20px;
  margin-top: 20px;

  display: flex;
  flex-direction: column;
  justify-content: center;
}

.white-container-info {
  background: white;
  padding: 40px;
  margin-top: 20px;
  

 mask:
  radial-gradient(
    circle 400px at 0 0,
    transparent 400px,
    black 401px
  );

-webkit-mask:
  radial-gradient(
    circle 400px at 0 0,
    transparent 400px,
    black 401px
  );
}

.half-circle p,
.half-circle h2 {
  max-width: 450px;
  overflow-wrap: break-word;
}

/* text in containers */
.half-circle,
.white-container-info {
  overflow-wrap: break-word;
  word-wrap: break-word;
}

.half-circle p,
.half-circle h2 {
  max-width: 400px;
}

.left-panel-blue h1,
.right-panel-blue h1 {
  font-size: 48px;
  margin-bottom: 10px;
}

.left-panel-blue h2,
.right-panel-blue h2 {
  font-size: 28px;
  margin-bottom: 15px;
}

.left-panel-blue p,
.right-panel-blue p {
  line-height: 1.8;
  font-size: 17px;
}

.white-container-info p {
  color: #333;
  line-height: 1.8;
}

/* CARDS */
.cards {
  display: flex;
  gap: 20px;
  margin-top: 30px;
}

.card {
  background: #f5f9ff;
  padding: 20px;
  border-radius: 20px;
  flex: 1;

  transition: transform 0.2s ease;
}

.card:hover {
  transform: translateY(-5px);
}

.card h3 {
  margin-top: 0;
}
</style>