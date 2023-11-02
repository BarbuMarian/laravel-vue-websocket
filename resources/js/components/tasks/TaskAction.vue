<template>
    <div class="task-actions">
        <button class="btn btn-sm btn-circle btn-outline-secondary me-1" @click="emit('edit')">
            <icon-pencil />
        </button>
        <button class="btn btn-sm btn-circle btn-outline-danger" @click="emit('remove')" >
            <icon-trash />
        </button>
    </div>
</template>

<script>
export default {
    name: "TaskAction",
}

</script>


<script setup>
import IconPencil from "../icons/IconPencil.vue";
import IconTrash from "../icons/IconTrash.vue"

const emit = defineEmits(['edit','remove']);
</script>

<style scoped>

</style>
