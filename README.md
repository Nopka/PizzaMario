Participants au travail : 

Alicia Saci
Hugo ROUSSILON


Description de la conception :
Le projet est constitué des classes suivante :
- classe abstraite <abstractPizza>
Et les classes instaciable : 
- "cartePizza" : représente  l'objet "menu" ou "carte" contenant les pizza proposées par MarioPizza
- "pizzaMenu" :  permet de créer des objets "pizza" à inserer dans le menu/carte et hérite de la classe abstractPizza.
- "pizzaCustom" : permet de créer des pizza custom (personnalisé par le client) et hérite de la classe abstractPizza.
- "listeIngredient" : représente les ingrédients disponible pour la customisation des pizza
- "Orders" : un objet "order" a.k.a contient quelques détails des pizza selectionné ainsi que le prix du tout et la date de commande
- "chefOrder" : un chef est assigné à une commande.

**2 scénario sont representés dans le code
le 1er : le client A commande une pizza depuis la carte des pizza, choisi d'enlever l'ingrédient ognon et consulte l'avancement de sa pizza.
le 2éme : le client B choisi de personnaliser 2 pizza au sein d'une même commande.

**un autoloader est utilisé pour charger les classes(modèle) qui se trouve dans le 
namespace pizzamario

**Executer index.php depuis le terminal.
**la version finale du code est celui de la branche master
  
