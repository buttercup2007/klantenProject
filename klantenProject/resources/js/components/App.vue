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
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f5f7fa;
  color: #2c3e50;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: linear-gradient(135deg, #2c5aa0, #4a90e2);
  padding: 18px 40px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  position: sticky;
  top: 0;
  z-index: 100;
}

.nav-title {
  font-size: 26px;
  font-weight: 700;
  color: white;
  letter-spacing: 0.5px;
}

.nav-links {
  display: flex;
  gap: 30px;
}

.nav-links a {
  text-decoration: none;
  color: rgba(255, 255, 255, 0.9);
  font-size: 16px;
  font-weight: 500;
  transition: all 0.3s ease;
  position: relative;
  padding-bottom: 5px;
}

.nav-links a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background-color: #c5f7f9;
  transition: width 0.3s ease;
}

.nav-links a:hover {
  color: #c5f7f9;
}

.nav-links a:hover::after {
  width: 100%;
}

.layout {
  display: grid;
  grid-template-columns: 320px 1fr 280px;
  gap: 30px;
  padding: 40px;
  min-height: calc(100vh - 80px);
  align-items: start;
  max-width: 1600px;
  margin: 0 auto;
}

.half-circle {
  background: linear-gradient(135deg, #2c5aa0, #4a90e2);
  color: white;
  border-radius: 0px 0px 400px 0px;
  width: 170%;
  max-height: 320px;
  padding: 30px;
  margin-top: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  box-shadow: 0 4px 15px rgba(44, 90, 160, 0.15);
}

.half-circle h1 {
  font-size: 36px;
  font-weight: 700;
  margin: 0 0 15px 0;
  letter-spacing: 1px;
}

.half-circle h2 {
  font-size: 20px;
  font-weight: 600;
  margin: 15px 0 10px 0;
  opacity: 0.95;
}

.half-circle p {
  max-width: 400px;
  overflow-wrap: break-word;
  font-size: 15px;
  line-height: 1.7;
  opacity: 0.9;
}

.white-container-info {
  background: white;
  padding: 45px 40px 45px 420px;
  margin-top: 0;
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
  overflow-wrap: break-word;
  word-wrap: break-word;

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

.white-container-info h2 {
  color: #2c5aa0;
  font-size: 22px;
  font-weight: 600;
  margin: 25px 0 15px 0;
  padding-bottom: 10px;
  border-bottom: 3px solid #4a90e2;
  display: inline-block;
}

.white-container-info h2:first-child {
  margin-top: 0;
}

.white-container-info p {
  color: #555;
  line-height: 1.8;
  font-size: 15px;
  margin: 15px 0;
}

.right-panel-blue h1,
.right-panel-blue h2 {
  font-size: 20px;
  margin-bottom: 15px;
  color: #2c5aa0;
}

.right-panel-blue p {
  line-height: 1.7;
  font-size: 14px;
  color: #666;
}

/* CARDS */
.cards {
  display: flex;
  gap: 20px;
  margin-top: 40px;
  flex-wrap: wrap;
}

.card {
  background: linear-gradient(135deg, #f8f9fb, #f0f4f8);
  padding: 28px 24px;
  border-radius: 12px;
  flex: 1;
  min-width: 220px;
  border: 1px solid #e8ecf1;
  transition: all 0.3s ease;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.card:hover {
  transform: translateY(-6px);
  box-shadow: 0 8px 20px rgba(44, 90, 160, 0.12);
  border-color: #4a90e2;
}

.card h3 {
  margin-top: 0;
  margin-bottom: 12px;
  color: #2c5aa0;
  font-size: 18px;
  font-weight: 600;
}

.card p {
  margin: 0;
  color: #666;
  font-size: 14px;
  line-height: 1.6;
}
</style>