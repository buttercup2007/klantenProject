<script setup>
const bronnen = [
  {
    naam: 'DUO',
    url: 'https://www.duo.nl'
  },
  {
    naam: 'Rijksoverheid',
    url: 'https://www.rijksoverheid.nl'
  },
  {
    naam: 'Studiekeuze123',
    url: 'https://www.studiekeuze123.nl'
  },
  {
    naam: 'Nederland Wereldwijd',
    url: 'https://www.nederlandwereldwijd.nl'
  }
]
</script>

<template>
  <footer class="footer">
    <div class="footer-content">

      <div class="footer-section">
        <h2>Student Financiering</h2>
        <p>
          Deze website helpt mbo-studenten bij het begrijpen van
          studiefinanciering, doorstromen naar het hbo, overstappen
          van opleiding en stoppen met een studie.
        </p>
      </div>

      <div class="footer-section">
        <h2>Bronnen</h2>

        <ul>
          <li
            v-for="bron in bronnen"
            :key="bron.naam"
          >
            <a
              :href="bron.url"
              target="_blank"
              rel="noopener noreferrer"
            >
              {{ bron.naam }}
            </a>
          </li>
        </ul>
      </div>

      <div class="footer-section">
        <h2>Belangrijk</h2>

        <p>
          Controleer altijd je persoonlijke situatie via DUO.
          Regelingen kunnen veranderen en verschillen per student.
        </p>
      </div>

    </div>

    <div class="footer-bottom">
      © 2026 Student Financiering | Educatief project
    </div>
  </footer>
</template>