<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { ref } from "@vue/reactivity";
import { onMounted } from "@vue/runtime-core";
import axios from "axios";
import SenaraiItem from "./Partials/SenaraiItem.vue";
import Form from "./Partials/Form.vue";

const senarais = ref([]);
const showForm = ref(false);
function getSenarais() {
  axios.get(route("api.senarais.index")).then((resp) => {
    senarais.value = resp.data;
  });
}

function toggleForm() {
  showForm.value = !showForm.value;
  console.log("form", showForm.value);
}

function saved() {
  showForm.value = false;
  getSenarais();
}

onMounted(() => {
  getSenarais();
});
</script>

    <template>
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        Dashboard
      </h2>
    </template>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <button @click="toggleForm()">+</button>
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
          <Form v-if="showForm" @saved="saved()" />
          <ul v-else>
            <SenaraiItem
              v-for="(senarai, index) in senarais"
              :key="index"
              :senarai="senarai"
            />
          </ul>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
