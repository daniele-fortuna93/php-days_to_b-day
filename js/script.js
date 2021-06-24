new Vue({
    el: '#root',
    data: {
        people: []
    },
    mounted: function(){
        axios.get('http://127.0.0.1:8888/php-days_to_b-day/api.php')
            .then((result) => {
                console.log(result.data);
                this.people = result.data;
                for (let i = 0; i < this.people.length; i++) {            
                this.people[i].age = this.calcAge(this.people[i].birth_date);
                this.people[i].daysToBirthDay = this.daysToBirthDay(this.people[i].birth_date);
            }
        });
        
    },
    methods: {
        calcAge: function (b_day) {
            let birthday = new Date(b_day);
            let today     = new Date();
        
            let years = (today.getFullYear() - birthday.getFullYear());
            if (  today.getDate() < birthday.getDate()) {
                
                years--;
            }
        
            return years;
        },
        daysToBirthDay: function(b_day){
            let birthday = new Date(b_day);
            let today     = new Date();

            birthday.setFullYear(today.getFullYear()); //setta l'anno di nascita con quello attuale

            if (today > birthday) { // confronto le date per vedere se il compleanno è già passato

                birthday.setFullYear(today.getFullYear() + 1); // setto l'anno di nascita con quello attuale + 1
            }

            var result = Math.ceil((birthday - today) / (1000*60*60*24)); //calcolo la differenza in giorni
            
            return result
        }
    }

});