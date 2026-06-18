<template>
  <nav class="navbar">
    <div class="nav-title">student financiering</div>

    <div class="nav-links">
      <a href="#" @click.prevent="zoomToSection('info-section')">
       Info
      </a>

      <a href="#" @click.prevent="zoomToSection('hbo-section')">
       HBO
      </a>

      <div class="dropdown">
        <span class="dropbtn">Opleiding</span>

        <div class="dropdown-content">
          <a href="#" @click.prevent="zoomToSection('start-opleiding')">
            Starten
          </a>

          <a href="#" @click.prevent="zoomToSection('overstap-opleiding')">
            Overstappen
          </a>

          <a href="#" @click.prevent="zoomToSection('stop-opleiding')">
            Stoppen
          </a>
        </div>
      </div>

      <a href="#" @click.prevent="zoomToSection('home-section')"> Home </a>
    </div>
  </nav>
</template>

<script setup>
function zoomToSection(id) {
  const section = document.getElementById(id)

  if (!section) return

  const offset = 100

  window.scrollTo({
    top: section.offsetTop - offset,
    behavior: 'smooth'
  })

  section.classList.add('zoomed')

  setTimeout(() => {
    section.classList.remove('zoomed')
  }, 1500)
}
</script>