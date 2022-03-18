let panier_actuel = {
    count: 0,
    products: []
};

function display_panier_actuel() {

    const div = document.getElementById("nb_articles").innerHTML = "Articles dans le panier : " + panier_actuel.count;


}

function Achat(id) {
    let was_found = false;

    panier_actuel.products.forEach((product) => {
        if (product.id === id) {
            product.quantite++;
            was_found = true;
        }
    });
    
    if (!was_found) 
        panier_actuel.products.push({ id: id, quantite: 1});
        panier_actuel.count++;

        console.log("panier_actuel");

        display_panier_actuel();    
        save_panier();
}

function save_panier() {
    localStorage.setItem('panier_actuel', JSON.stringify(panier_actuel));

}
    
function load_panier() {

    const panier_sauvegardé = JSON.parse(localStorage.getItem('panier_actuel'));

    if (panier_sauvegardé !== undefined && panier_sauvegardé !== null)  {
        panier_actuel = panier_sauvegardé;
        display_panier_actuel();
    }

    

    }


load_panier();


