<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import SenaraiItem from "./Partials/SenaraiItem.vue";

const senarais = [
  { name: "senarai1" },
  { name: "senarai2" },
  { name: "senarai3" },
  { name: "senarai4" },
  { name: "senarai5" },
  { name: "senarai6" },
  { name: "senarai7" },
];
</script>

    <template>
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <ul>
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
