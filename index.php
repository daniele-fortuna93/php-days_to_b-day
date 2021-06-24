
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Giorni al compleanno</title>
        <!-- Google font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
        <!-- Vuejs -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <!-- axios -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <h1>Giorni al Compleanno</h1>          
        </header>
        <main class="container">
            <section id="insert_data">
                <form action="create.php" method="post">
                    <div class="input_container">
                        <label for="">Nome</label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="input_container">
                        <label for="">Cognome</label>
                        <input type="text" name="lastname" required>
                    </div>
                    <div class="input_container">
                        <label for="">Data di nascita</label>
                        <input type="date" name="birth_date" required>
                    </div>
                    <input id="submit_form" type="submit">
                </form>
            </section>
            <section id="show_data">    
                <div id="root" v-if="people.length > 0">
                    <div >
                        <div class="row" v-for="person in people">
                            <div class="field_person">
                                <h3>Nome</h3>
                                <p>{{ person.name }}</p>
                            </div>
                            <div class="field_person">
                                <h3>Cognome</h3>
                                <p>{{ person.lastname }}</p>
                            </div>
                            <div class="field_person">
                                <h3>Data di Nascita</h3>
                                <p>{{ person.birth_date }}</p>
                            </div>
                            <div class="field_person">
                                <h3>Età</h3>
                                <p>{{ person.age }}</p>
                            </div>
                            <div class="field_person">
                                <h3>Giorni al Compleanno</h3>
                                <p>{{ person.daysToBirthDay }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <script src="js/script.js" charset="utf-8"></script>
    </body>
</html>




