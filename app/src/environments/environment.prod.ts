// Utilisé lors d'un build avec la commande `ng build --configuration=production`
export const environment = {
	production: true,
	DEBUG_MODE: false,
	// Remplacé au build (CI/script) avec la variable d'env GITHUB_TOKEN
	GH_PERSONAL_ACCESS_TOKEN: '__GITHUB_TOKEN__',
};
