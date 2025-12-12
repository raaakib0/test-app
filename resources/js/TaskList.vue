<template>
    <div>
        <div v-for="task in tasks" :key="task.id">
            <input type="checkbox" :checked="task.completed" @change="toggle(task)">
        </div>
    </div>
</template>