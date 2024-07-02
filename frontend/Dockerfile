# Utilisation de l'image Node.js officielle avec version stable
FROM node:14

# Définir le répertoire de travail dans le conteneur
WORKDIR /app

# Copier les fichiers du projet React dans le conteneur
COPY . .

# Installer les dépendances du projet React
RUN npm install

# Exposer le port 3000 pour l'accès au serveur de développement
EXPOSE 3000

# Commande par défaut pour démarrer l'application React
CMD ["npm", "start"]
