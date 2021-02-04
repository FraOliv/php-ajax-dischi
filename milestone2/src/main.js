  
import Vue from 'vue';
import axios from 'axios';



let app = new Vue ({


    el: "#root",
    
    data: {

        listaCD : [],
        search : "",
        authorList : [],
         

    },
    methods: {
        
    },
    created() {
        axios.get("./data.php").then(response => {
            this.listaCD = response.data;
            console.log(this.listaCD);
            
            });
    },

    computed: {
        filteredAuthor: function () {
            return this.listaCD.filter((author) => {
                return author.author.match(this.search);

            });
            
        }
    }

})