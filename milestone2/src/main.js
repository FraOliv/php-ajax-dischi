import Vue from 'vue';
import axios from 'axios';



let app = new Vue ({


    el: "#root",
    
    data: {

        listaCD : [],
         

    },
    methods: {
        
    },
    mounted() {
        axios.get("http://localhost/esercizi-boolean/Esercizio%2048%20-%20php-ajax-dischi/php-ajax-dischi/milestone2/data.php").then(response => {
            this.listaCD = response.data;
            console.log(this.listaCD);
        }).catch(error=>{
            console.log(error);
        })
    },

})
