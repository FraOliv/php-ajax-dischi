  
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
        axios.get("./data.php").then(response => {
            this.listaCD = response.data;
            console.log(this.listaCD);
        }).catch(error=>{
            console.log(error);
        })
    },

})