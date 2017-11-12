<?php

namespace Application;

return array(

	// language
	'language.name' => "Français",

	'common.create' => "Créer un nouveau",
	'common.view' => "Voir",
	'common.edit' => "Modifier",
	'common.delete' => "Supprimer",
	'common.save' => "Enregistrer",
	'common.download' => "Télécharger",
	'common.cancel' => "Annuler",
	'common.generate' => "Générer",
	'common.send-feedback' => 'Envoyer une demande de fonctionnalité ou un rapport de bug',

	'common.dashboard' => "Tableau de Bord",
	'common.reports' => "Rapports",
	'common.settings' => "Paramètres",
	'common.login' => "Se connecter",
	'common.logout' => "Déconnexion",
	'common.home' => "Accueil",
	'common.confirm-action' => "Confirmer l'action",
	'common.unspecified' => "None",
	'common.confirm-proceed' => "Voulez-vous continuer?",
	'common.confirm-delete' => "Cette opération supprimera les %s %s et toutes les données connexes du système.",
	'common.yes' => "Oui",
	'common.no' => "Non",
	'common.close' => "Fermer",
	'common.no-undo' => "Cette opération ne peut pas être annulée.",
	'common.alert-action' => "Alerte",
	'common.alert-access-denied' => "Vous n'avez pas les privilèges suffisants pour effectuer cette action.",
	'common.confirm-permissions-revoke' => "Cette opération révoquera les privilèges de %s %s sur %s %s.",
	'common.confirm-permissions-grant' => "Cette opération accordera les privilèges %s %s aux %s %s.",
	'common.select-empty-item-title' => "Rien sélectionné",
	'common.total' => "Total",
	'common.to' => "To",
	'common.from' => "De",
	'common.no-data' => "Aucune donnée disponible",

	'activity-stream.created' => "%s a créé ce %s.",
	'activity-stream.deleted' => "%s a supprimé ce %s.",
	'activity-stream.updated-detailed' => "%s a modifié les %s %s de %s à %s.",
	'activity-stream.updated-brief' => "%s a modifié un %s.",
	'activity-stream.associated' => "%s a ajouté le %s %s à ce %s.",
	'activity-stream.dissociated' => "%s a supprimé les %s %s de ce %s.",
	'activity-stream.requested' => " %s a demandé le %s %s.",
	'activity-stream.empty' => "vide",
	'activity-stream.opened' => "%s a ouvert ce %s.",
	'activity-stream.closed' => "%s a fermé ce %s.",
	'activity-stream.granted' => "%s accorde %s accès à ce %s.",
	'activity-stream.revoked' => "%s a révoqué l'accès de %s à ce %s.",
	'activity-stream.recent-activity' => "Activité récente",
	'activity-stream.no-activity' => "Aucune activité récente à signaler",

	// entité de travail
	'job.entity' => "Cas",
	'job.jobs' => "Cas",
	'job.open-jobs' => "Cas ouverts",
	'job.closed-jobs' => "Cas fermés",
	'job.id' => "#",
	'job.name' => "Titre",
	'job.creation-time' => "Créé le",
	'job.description' => "Description",
	'job.customer-account' => "Compte client",
	'job.contract' => "Contrat",
	'job.contract-type' => "Type de contrat",
	'job.contract-type-fixed' => "Montant fixe",
	'job.contract-type-variable' => "Taux variable",
	'job.contract-rate' => "Taux de contrat",
	'job.contract-currency' => "Devise du contrat",
	'job.comments' => "Commentaires",
	'job.close' => "Fermer",
	'job.open' => "Ouvrir",
	'job.permission-manage' => "Propriétaire avec tous les privilèges",
	'job.permission-edit' => "Collaborateur avec droits d'édition",
	'job.permission-view' => "Collaborateur avec les privilèges d'affichage",
	'job.confirm-close' => "Cette opération fermera %s %s et cachera toutes les données associées dans le système.",
	'job.confirm-open' => "Cette opération ouvrira %s %s et rendra toutes les données associées visibles dans le système.",
	'job.alert-owner-permissions-revoke' => "Les privilèges de ce propriétaire %s ne peuvent pas être révoqués.",
	'job.alert-action-closed-job' => "Cette opération ne peut pas être effectuée sur un %s fermé.",
	'job.alert-action-open-job' => "Cette opération ne peut pas être effectuée sur un %s ouvert",
	'job.owner' => "Propriétaire",

	// entité d'étiquette
	'label.entity' => "Étiquette",
	'label.labels' => "Étiquettes",
	'label.id' => "#",
	'label.colour' => "Couleur",
	'label.name' => "Nom",
	'label.current-labels' => "Étiquettes actuelles",

	// entité de fichier
	'file.entity' => "Fichier",
	'file.current-files' => "Fichiers en cours",
	'file.name' => "Nom",
	'file.creation-time' => "Date",
	'file.add' => "Ajouter un fichier",

	// entité de journal
	'log.entity' => "Entrée de journal",
	'log.date' => "Date",
	'log.description' => "Description",
	'log.effort' => "Effort",
	'log.hours' => "Heures",
	'log.add' => "Ajouter une entrée de journal",
	'log.view-all' => "Afficher le journal complet",

	// entité de modèle
	'template.entity' => "Template",
	'template.templates' => "Modèles",
	'template.current-templates' => "Modèles actuels",
	'template.id' => "#",
	'template.description' => "Description",
	'template.name' => "Nom",
	'template.filename' => "Fichier",
	'template.creation-time' => "Date",
	'template.add' => "Ajouter un modèle",
	'template.owner' => "Propriétaire",

	// entité utilisateur
	'user.entity' => "Utilisateur",
	'user.users' => "Utilisateurs",
	'user.current-users' => "Utilisateurs actuels",
	'user.my-user-account' => "Mon compte",
	'user.id' => "#",
	'user.name' => "Nom",
	'user.username' => "Adresse email",
	'user.password' => "Mot de passe",
	'user.address' => "Adresse",
	'user.role' => "Rôle",
	'user.self' => "Vous",
	'user.role-administrator' => "Administrateur",
	'user.role-employee' => "Employé",
	'user.role-customer' => "Client",
	'user.status' => "Statut",
	'user.activate' => "Activer",
	'user.deactivate' => "Désactiver",
	'user.confirm-deactivate' => "Cette opération désactivera %s %s.",
	'user.confirm-activate' => "Cette opération activera %s %s.",
	'user.alert-min-threshold' => "Cette application nécessite au minimum 1 %s actif.",
	'user.alert-owner-open-jobs' => "Ce %s a au moins un %s ouvert et ne peut pas être supprimé.",

	// entité d'autorisation
	'permission.entity' => "Privilège",
	'permission.permissions' => "Privilèges",
	'permission.grant' => "Ajouter un (des) collaborateur (s)",
	'permission.revoke' => "Supprimer un collaborateur",
	'permission.collaborators' => "Collaborateurs",

    // tableau de bord
    'dashboard.menu-card-user-description' => "Gérer et mettre à jour les comptes utilisateurs",
    'dashboard.menu-card-my-account-description' => "Gérer et mettre à jour votre compte utilisateur.",
    'dashboard.menu-card-label-description' => "Gérer les étiquettes de cas.",
    'dashboard.menu-card-job-description' => "Gérer et mettre à jour les cas et les documents.",
    'dashboard.menu-card-template-description' => "Partager et utiliser des modèles à l'échelle de l'entreprise.",

    // rapports
    'report.job-effort' => "Rapport d'effort de cas",
    'report.user-effort' => "Rapport d'effort de l'utilisateur",
);
?>