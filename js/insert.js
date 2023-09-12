


const app = Vue.createApp({
    data() {
        return {
            formData: {
                title: "",
                author: "",
                year: "",
                poster: "",
                genre: "",
            }
        }
    },
    methods: {
        postData() {

            axios.post("api/add.php", this.formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                }
            }).then((response) => {
                console.log(response.data);
                window.location.href = '/php-dischi-json/index.php';
            })
        }
    }
});

app.mount("#app");