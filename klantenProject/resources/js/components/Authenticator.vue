<script setup>
import { ref, onMounted } from 'vue'
import QRCode from 'qrcode'
import axios from 'axios'

const qrCodeUrl = ref('')

onMounted(async () => {
  const res = await axios.get('/generate-quiz-token')
  const token = res.data.token

  const quizUrl = `http://10.68.238.149:8000/quiz?token=${token}`

  qrCodeUrl.value = await QRCode.toDataURL(quizUrl)
})
</script>