<script>
export default {
    data() {
        return {
            pokemon: [{ "name": "Pikachu" }, {"name": "Bulbasaur"}]
        }
    }
}
</script>

<template>
    <body>
        <header>
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <img src="logo.svg" style="width: 30px; margin-right: 10px;">
                        <strong>Pokemon list</strong>
                    </a>
                </div>
            </div>
        </header>

        <main>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-4 row-cols-md-5 g-3">
                        <div v-for="p in pokemon" class="col">
                            <div class="card shadow-sm bg-card ">
                                <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/25.png" alt="">

                                <div class="card-body">
                                    #25
                                    <h3>{{p.name}}</h3>
                                    
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        </div>
                                        <small class="text-muted">Electric</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <footer class="text-muted py-5">
            <div class="container">
                <p class="float-end mb-1">
                    <a href="#">Back to top</a>
                </p>
            </div>
        </footer>
    </body>
</template>