<template>
    <div>
        <h4>
            {{ name }}'s To Do List
        </h4>
        <div>
            <input v-model="newItemText" />
            <button v-on:click="addNewTodo">Add</button>
            <button v-on:click="removeTodo">Remove</button>
            <transition-group name="list" tag="ul">
                <li v-for="task in tasks" v-bind:key="task" >{{ task }}</li>
            </transition-group>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            name: "Ivaylo",
            tasks: ['Write my posts', 'Go for a walk', 'Meet my friends', 'Buy fruits'],
            newItemText: ""
        }
    },
    methods: {
        addNewTodo() {
        if (this.newItemText != "") {
            this.tasks.unshift(this.newItemText);
        }
        this.newItemText = "";
        },
        removeTodo() {
        this.tasks.shift();
        },
    },
}
</script>

<style scoped>
.list-enter-active {
  animation: add-item 1s;
}
 
.list-leave-active {
  position: absolute;
  animation: add-item 1s reverse;
}
 
.list-move {
  transition: transform 1s;
}
@keyframes add-item {
  0% {
    opacity: 0;
    transform: translateX(150px);
  }
  50% {
    opacity: 0.5;
    transform: translateX(-10px) skewX(20deg);
  }
  100% {
    opacity: 1;
    transform: translateX(0px);
  }
}
</style>