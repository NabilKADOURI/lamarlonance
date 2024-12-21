# **Lamarlonance** 🌟

## **📝 Description**
**Lamarlonance** est un site vitrine conçu pour un chorégraphe professionnel. Il présente ses prestations avec un visuel attrayant sous forme de photos dynamiques, un espace dédié pour les contacts, une section "À propos", et une interface d'administration.

---

## **🌟 Fonctionnalités principales**

### **🎭 Partie publique**
- **🖼️ Galerie dynamique :** Les photos des prestations sont récupérées depuis une base de données et affichées de manière attrayante.
- **📩 Formulaire de contact :** Permet aux utilisateurs d'envoyer des messages directement au chorégraphe.
- **📖 À propos :** Présentation détaillée du chorégraphe et de son parcours.

### **🔒 Partie administration**
- **📂 Gestion des photos :** Ajouter, modifier ou supprimer les photos des prestations.
- **📝 Gestion des messages :** Consulter les messages reçus via le formulaire de contact et les supprimer si nécessaire.

---

## **📋 Prérequis**
- 🌐 Serveur web local ou distant (Apache, Nginx, etc.)
- 🐘 PHP version 7.4 ou supérieure
- 🛢️ Base de données MySQL
- 🖥️ Node.js pour compiler les fichiers CSS avec Tailwind (optionnel)
- Composer (pour la gestion des dépendances)

---

## **🚀 Installation**

### **Étape 1 : Cloner ou copier les fichiers du projet**
Téléchargez ou clonez ce dépôt dans le répertoire racine de votre serveur web :
```bash
git clone <URL_DU_DEPOT>
```

### **Étape 2 : Configuration de la base de données**
1. Créez une base de données MySQL.
2. Importez les données depuis le fichier `lamarlonance.sql` :
   ```bash
   mysql -u votre_utilisateur -p nom_de_la_base < lamarlonance.sql
   ```
3. Configurez les informations de connexion à la base dans le fichier `db.ini-template` :
   ```ini
   [database]
   host = "localhost"
   user = "votre_utilisateur"
   password = "votre_mot_de_passe"
   dbname = "nom_de_la_base"
   ```
   Renommez le fichier en `db.ini` après modification.

### **Étape 3 : Installer les dépendances PHP**
Utilisez Composer pour installer les dépendances nécessaires :
```bash
composer install
```

### **Étape 4 : Compiler les fichiers CSS (Optionnel)**
Pour utiliser Tailwind CSS, vous pouvez recompiler les fichiers avec Node.js :
```bash
npm install
npx tailwindcss -i ./style.css -o ./output.css --watch
```

### **Étape 5 : Démarrer le serveur local**
Lancez un serveur PHP local si vous êtes en mode développement :
```bash
php -S localhost:8000
```
Accédez au projet via l'URL : `http://localhost:8000`

---

## **🛠️ Organisation des fichiers**
### **📄 Fichiers principaux**
- **index.php** : Page d'accueil principale.
- **about.php** : Page "À propos".
- **prestation.php** : Liste des prestations.
- **gallery.php** : Galerie de photos.
- **contact.php / contact_form.php** : Pages et logique du formulaire de contact.
- **services-item.php** : Composants pour afficher les services individuellement.

### **🛠️ Fichiers administratifs**
- **index-admin.php** : Tableau de bord administrateur.
- **admin.php** : Interface principale d'administration.
- **add-process-service.php** : Script pour ajouter des services.
- **modify-service.php** : Interface pour modifier un service.
- **modify-process-services.php** : Script pour traiter les modifications.
- **delete-process-services.php** : Script pour supprimer des services.
- **delete-process-message.php** : Supprimer un message de contact.
- **admin-process.php** : Traitement des actions administratives.

### **💻 Fichiers backend**
- **Db.php** : Classe gérant la connexion à la base de données.
- **TextUtils.php / utils.php** : Fonctions utilitaires.
- **Contacts.php** : Gestion des messages de contact.
- **FileUpload.php** : Gestion des téléversements de fichiers.

### **🎨 Fichiers CSS et JavaScript**
- **aos.css** : Animations scroll AOS.
- **output.css** : Fichier compilé de Tailwind CSS.
- **owl.carousel.min.css** : Styles pour le carrousel.
- **style.css** : Fichier principal de styles avec Tailwind et personnalisations.

### **⚙️ Configuration et autres**
- **db.ini-template** : Modèle de configuration de la base de données.
- **lamarlonance.sql** : Script SQL pour initialiser la base de données.
- **.gitignore** : Liste des fichiers ignorés (inclut `db.ini`).

---

## **💡 Code d'exemple**
### **Afficher les photos dynamiques (Twig)**
```html
<div class="w-full md:w-1/2 lg:w-1/4 p-4" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img src="uploads/{{ $item['picture_services'] }}" alt="{{ $item['title_services'] }}" class="w-full h-48 object-cover">
        <div class="p-4">
            <h3 class="text-lg font-bold text-center">
                <a href="prestation.php?id={{ $item['id_services'] }}" class="text-gray-800 hover:text-yellow-500">
                    {{ $item['title_services'] }}
                </a>
            </h3>
        </div>
    </div>
</div>
```

### **Traitement du formulaire de contact (PHP)**
```php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $stmt = $db->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $message]);
    
    echo "Message envoyé avec succès !";
}
```

---

## **✏️ Personnalisation**
Vous pouvez :
- Modifier les fichiers CSS pour adapter le design.
- Ajouter de nouveaux services via l'interface admin.
- Étendre la logique en ajoutant de nouvelles pages (exemple : blog, avis des clients).

---

## **👩‍💻 Développement**
Pour contribuer ou améliorer le projet, utilisez un environnement de développement comme **Visual Studio Code**. Activez les extensions pour PHP, MySQL et Tailwind CSS afin de faciliter le développement.

---

## **💬 Remerciements**
Développé par Nabil KADOURI. Merci d'utiliser **Lamarlonance** ! Si vous avez des questions ou suggestions, n'hésitez pas à contribuer ou à soumettre un rapport d'erreur.
