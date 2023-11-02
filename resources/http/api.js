import axios from "axios";

const api = axios.create({
   baseURL: "http://laravel-vue-new.test:84/api/v1"
});

export default api;
