<template>
  <div>
    <input type="text" v-model="form.name" />

    <button @click="submit()">Simpan</button>
  </div>
</template>

<script setup>
import { reactive } from "@vue/reactivity";

const form = reactive({
  name: "",
});

const emits = defineEmits(["saved"]);

function submit() {
  axios.post(route("api.senarais.store"), form).then((resp) => {
    console.log("resp", resp);
    emits("saved");
  });
}
</script>

<style lang="scss" scoped>
</style>
