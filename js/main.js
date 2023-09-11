

const app = Vue.createApp({
    data() {
        return {
            cdList: [],
        }
    },
    methods: {
        fetchData() {
            axios.get("api/dischi.php").then((response) => {
                this.cdList = response.data;
            })
        }
    },
    mounted() {
        this.fetchData();
    }
});

app.mount("#app");