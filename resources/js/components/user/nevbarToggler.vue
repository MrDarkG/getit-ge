<template>
    <button class="navbar-toggler " @click="toggleActive()">
        <i class="fa fa-bars custom-text-primary fa-2x" aria-hidden="true"></i>
    </button>
</template>

<script>

export default {
    data() {
        return {
            isActive: true
        }
    },
    methods: {
        hideMenu() {
            let verticalMenu = document.getElementById('vertical-menu');
            verticalMenu.classList.remove('d-block');
            verticalMenu.classList.remove('d-md-block');
            verticalMenu.classList.add('d-none');
            let contentClasslist = document.getElementById('content').classList;
            contentClasslist.remove('col-md-9');
            contentClasslist.add('col-md-12');

        },
        showMenu() {
            let verticalMenu = document.getElementById('vertical-menu');
            verticalMenu.classList.add('d-block');
            verticalMenu.classList.remove('d-none');
            verticalMenu.classList.add('d-md-block');
            let contentClasslist = document.getElementById('content').classList;
            contentClasslist.add('col-md-9');
            contentClasslist.remove('col-md-12');
        },
        toggleActive() {
            console.log(this.isActive)
            if (this.isActive) {
                this.isActive = false;
                this.hideMenu();
            } else {
                this.isActive = true;
                this.showMenu();
            }
        }
    },
    mounted() {
        if (window.innerWidth < 768) {
            this.isActive = false;
            this.hideMenu();
        }
    }
}
</script>
