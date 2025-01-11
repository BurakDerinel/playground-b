# 🎨 Playground B WordPress Theme

Ein leichtgewichtiges und flexibles WordPress-Theme mit lokalem Bootstrap und SCSS-Unterstützung.

## 🚀 Features
- **Bootstrap-Integration**: Lokale Nutzung ohne CDN.
- **SCSS-Support**: Styles werden mit Sass kompiliert.
- **Schriftarten**: Lokale Einbindung der Google Fonts "Montserrat" und "Open Sans".
- **Modernes Design**: Ideal für schnelle Anpassungen.

## 🛠️ Installation
### 1. Klone das Repository
```bash
git clone git@github.com:BurakDerinel/playground-b.git
```

### 2. Navigiere zum Projektordner
```bash
cd playground-b
```

### 3. Installiere die Abhängigkeiten
Stelle sicher, dass `npm` und `node` installiert sind:
```bash
npm install
```

### 4. Starte den Entwicklungsserver
```bash
npm run dev
```

## 🌍 Zugriff von anderen Geräten im Netzwerk
- Verwende die externe URL, die von `BrowserSync` generiert wird (z. B. `http://192.168.x.x:3000`), um die Webseite von deinem Smartphone oder Tablet zu sehen.

## 📝 Struktur
```
playground-theme/
├── assets/
│   ├── css/
│   │   └── main.css
│   ├── js/
│   │   └── custom.js
│   └── sass/
│       └── main.scss
├── fonts/
│   └── Montserrat, OpenSans (lokale Fonts)
├── inc/
│   ├── enqueue-scripts.php
│   └── theme-setup.php
├── functions.php
├── header.php
├── footer.php
├── index.php
└── style.css
```

## 🔑 SSH-Zugang einrichten (optional)
1. SSH-Schlüssel generieren:
   ```bash
   ssh-keygen -t ed25519 -C "deine-email@example.com"
   ```
2. Schlüssel zu GitHub hinzufügen: [GitHub SSH Settings](https://github.com/settings/keys).

## 📦 Abhängigkeiten
- **node-sass**: Kompiliert SCSS-Dateien zu CSS.
- **browser-sync**: Live-Reload-Funktion für WordPress-Themes.
- **Bootstrap**: Lokales Frontend-Framework.

---

## 🐄 Lizenz
Dieses Projekt ist unter keiner speziellen Lizenz verfügbar. Du kannst es nach Belieben nutzen oder anpassen.

