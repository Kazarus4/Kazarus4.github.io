<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->                               
        <meta charset="utf-8" />
        <title>Faster 1.0</title>
        <link rel="stylesheet" href="styles.css" />
	<script type="text/javascript" src="menu.js"></script>
    </head>

    <body>
	<header>
	</header>
        <!-- Corps de la page -->
<div class="top">            
	<ul id="menuS">
		<li><a href="#">Général</a>
				<ul>
					<li><a href="SGeneAPI.php">API</a></li>
					<li><a href="SGeneTHX.php">Cloture Ticket</a></li>
					<li><a href="SGeneComBl.php">Com Blanche</a></li>
					<li><a href="SGeneComCut.php">Com Coupe</a></li>
					<li><a href="SGeneHS.php">Hors Support</a></li>
					<li><a href="SGeneLVLSupport.php">LVL Support</a></li>
					<li><a href="SGeneNicHack.php">Nic Hack</a></li>
					<li><a href="SGeneV6.php">Manager</a></li>
					<li><a href="SGeneProc.php">Procédures</a></li>
					<li><a href="SGeneRunAdm.php">Remontée Admin</a></li>
					<li><a href="SGeneSuivi.php">Suivi</a></li>
					<li><a href="SGeneDoublons.php">Tickets Double</a></li>
					<li><a href="SGeneTransfert.php">Transfert Call</a></li>
					<li><a href="SGeneTask.php">Travaux/JIRA</a></li>
				</ul>
		</li>
		<li><a href="#">Domaine</a>
				<ul>
					<li><a href="#">Création</a>
							<ul>
								<li><a href="SDomCreaAfterMkt.php">Aftermarket</a></li>
								<li><a href="SDomCreaErrors.php">Erreurs</a></li>
								<li><a href="SDomCreaDoing.php">Doing</a></li>
								<li><a href="SDomCreaSubscribe.php">Souscription</a></li>
							</ul>
					</li>
					<li><a href="SDomHold.php">Hold</a></li>
					<li><a href="#">Redirections</a>
							<ul>
								<li><a href="SDomRedirCrea.php">Création</a></li>
								<li><a href="SDomRedirEdit.php">Edition</a></li>
							    <li><a href="SDomRedirErr.php">Erreurs</a></li>
								<li><a href="SDomRedirMail.php">Mails</a></li>
								<li><a href="SDomRedirDel.php">Suppression</a></li>
							</ul>
					</li>
					<li><a href="SDomRestore.php">Restauration</a></li>
					<li><a href="SDomDel.php">Suppression</a></li>
					<li><a href="#">Trade</a>
							<ul>
								<li><a href="SDomTrdContacts.php">Change Contacts</a></li>
								<li><a href="SDomTrdErrors.php">Erreurs</a></li>
								<li><a href="SDomTrdGene.php">General</a></li>
								<li><a href="SDomTrdMlValid.php">Validation Mail</a></li>
							</ul>
					</li>
					<li><a href="#">Transferts</a>
							<ul>
								<li><a href="SDomTrsfSpeed.php">Acceleration</a></li>
								<li><a href="SDomTrsfAUTH.php">AUTH/INFO</a></li>
								<li><a href="SDomTrsfIn.php">Entrant</a></li>
								<li><a href="SDomTrsfErrors.php">Erreurs</a></li>
								<li><a href="SDomTrsfContacts.php">Change Contacts</a></li>
								<li><a href="SDomTrsfOut.php">Sortant</a></li>
							</ul>
					</li>
					<li><a href="#">Unregistred</a>
							<ul>
								<li><a href="SDomUnregDispo.php">Disponible</a></li>
								<li><a href="SDomUnregIndispo.php">Indisponible</a></li>
							</ul>
					</li>
					<li><a href="#">Whois</a>
							<ul>
								<li><a href="SDomWhoisHiddenOWO.php">Masquage/OWO</a></li>
								<li><a href="SDomWhoisMAJ.php">Mise à jour</a></li>
							</ul>
					</li>
				</ul>
		</li>
		<li><a href="#">DNS</a>
				<ul>
					<li><a href="#">Creation</a>
							<ul>
								<li><a href="SDNSCreaAdd.php">Ajouter</a></li>
								<li><a href="SDNSCreaAnycast.php">Anycasts</a></li>
								<li><a href="SDNSCreaErrors.php">Erreurs</a></li>
								<li><a href="SDNSCreaProc.php">Procedure</a></li>
							</ul>
					</li>
					<li><a href="SDNSContacts.php">Change Contacts</a></li>
					<li><a href="#">Edition</a>
							<ul>
								<li><a href="SDNSEditSRV.php">Serveur</a></li>
								<li><a href="SDNSEditZone.php">Zone</a></li>
							</ul>
					</li>
					<li><a href="#">Erreurs</a>
							<ul>
								<li><a href="SDNSErrDNSSEC.php">DNSSEC</a></li>
								<li><a href="SDNSErrPropag.php">Propagation</a></li>
							</ul>
					</li>
					<li><a href="SDNSRestore.php">Restauration</a></li>
					<li><a href="#">Suppression</a>
							<ul>
								<li><a href="SDNSDelSrvc.php">Serveur</a></li>
								<li><a href="SDNSDelAnycasts.php">Anycasts</a></li>
							</ul>
					</li>
					<li><a href="SDNSUnregOVH.php">Unregistred OVH</a></li>
				</ul>
		</li>
		<li><a href="#">4XX/5XX</a>
				<ul>
					<li><a href="#">403</a>
							<ul>
								<li><a href="S4xx5xx403htaccess.php">.htaccess</a></li>
								<li><a href="S4xx5xx403Racine.php">700 Racine</a></li>
								<li><a href="S4xx5xx403Chmod.php">Chmod insuffisants</a></li>
								<li><a href="S4xx5xx403ModSecu.php">Mod Security</a></li>
							</ul>
					</li>
					<li><a href="#">404</a>
							<ul>
								<li><a href="S4xx5xx404PointKO.php">Pointage KO</a></li>
								<li><a href="S4xx5xx404FileKO.php">Fichier Inexistant</a></li>
							</ul>
					</li>
					<li><a href="#">500</a>
							<ul>
								<li><a href="S4xx5xx500ISE.php">Internal Server Error</a></li>
								<li><a href="S4xx5xx500Pblche.php">Page Blanche</a></li>
							</ul>
					</li>
					<li><a href="S4xx5xx501.php">501</a></li>
					<li><a href="S4xx5xx502.php">502</a></li>
					<li><a href="#">503</a>
							<ul>
								<li><a href="S4xx5xx503CDN.php">CDN</a></li>
								<li><a href="S4xx5xx503IPBan.php">"IP Ban" Page</a></li>
								<li><a href="S4xx5xx503Mitig.php">Mitigation</a></li>
								<li><a href="S4xx5xx503MitigKO.php">Mitigation KO</a></li>
							</ul>
					</li>
					<li><a href="S4xx5xx504Backend.php">504 "Backend"</a></li>
					<li><a href="#">504 "Gateway"</a>
							<ul>
								<li><a href="S4xx5xx504BO.php">BackOffice</a></li>
								<li><a href="S4xx5xx504Mutu.php">BDD Mutu</a></li>
								<li><a href="S4xx5xx504SQLConfig.php">Config SQL KO</a></li>
								<li><a href="S4xx5xx504CDB.php">Cloud DB</a></li>
								<li><a href="S4xx5xx504Plugin.php">Plugin KO</a></li>
								<li><a href="S4xx5xx504PrivSQL.php">SQL Privé</a></li>
							</ul>
					</li>
					<li><a href="#">Lenteurs</a>
							<ul>
								<li><a href="S4xx5xxLentBO.php">BackOffice</a></li>
								<li><a href="S4xx5xxLentMutu.php">BDD Mutu</a></li>
								<li><a href="S4xx5xxLentSQLConfig.php">Config SQL KO</a></li>
								<li><a href="S4xx5xxLentCDB.php">Cloud DB</a></li>
								<li><a href="S4xx5xxLentPlugin.php">Plugin KO</a></li>
								<li><a href="S4xx5xxLentPrivSQL.php">SQL Privé</a></li>
							</ul>
					</li>
					<li><a href="S4xx5xx520.php">520</a></li>
					<li><a href="S4xx5xxInfos.php">Demandes Infos</a></li>
					<li><a href="S4xx5xxHS.php">Hors Support</a></li>
					<li><a href="S4xx5xxExtOVH.php">Host Non OVH</a></li>
				</ul>
		</li>
		<li>
			<a href="#">Hosting</a>
				<ul>
					<li><a href="#">CDN</a>
							<ul>
								<li><a href="SHostCDNAdd.php">Ajouter</a></li>
								<li><a href="SHostCDNDel.php">Supprimer</a></li>
							</ul>
					</li>
					<li><a href="#">Cloud Web</a>
							<ul>
								<li><a href="SHostCWCmd.php">Commande</a></li>
								<li><a href="SHostCWUse.php">Utilisation</a></li>
								<li><a href="SHostCWDel.php">Suppression</a></li>
							</ul>
					</li>
					<li><a href="#">Configuration</a>
							<ul>
								<li><a href="SHostConfMailErr.php">Erreur Mails Associés</a></li>
								<li><a href="SHostConfFTP.php">FTP</a></li>
								<li><a href="SHostConfMail.php">Mails Associés</a></li>
								<li><a href="SHostConf1Clic.php">"One click"</a></li>
								<li><a href="SHostConfSQL.php">SQL</a></li>
								<li><a href="SHostConfSQLPriv.php">SQL Privé</a></li>
							</ul>
					</li>
					<li><a href="SHostCmd.php">Commande</a></li>
					<li><a href="#">Cron</a>
							<ul>
								<li><a href="SHostCronIssue.php">Incident</a></li>
								<li><a href="SHostCronUse.php">Utilisation</a></li>
							</ul>
					</li>
					<li><a href="#">Hack</a>
							<ul>
								<li><a href="SHostHckAbuse.php">Abuse Mail</a></li>
								<li><a href="SHostHckChmod700.php">Chmod 000</a></li>
								<li><a href="SHostHckChmod000.php">Chmod 700</a></li>
								<li><a href="SHostHckListenFTP.php">Listening FTP</a></li>
								<li><a href="SHostHckPhishing.php">Phishing</a></li>
								<li><a href="SHostHckPHPSPM.php">PHP SPAM</a></li>
								<li><a href="SHostHckTCP.php">TCP Out</a></li>
								<li><a href="SHostHckWbstKO.php">Webstate KO</a></li>
							</ul>
					</li>
					<li><a href="SHostHS.php">Hors Support</a></li>
					<li><a href="#">Multisites</a>
							<ul>
								<li><a href="SHostMultiAdd.php">Ajouter</a></li>
								<li><a href="SHostMultiEdit.php">Editer</a></li>
								<li><a href="SHostMultiDel.php">Supprimer</a></li>
							</ul>
					</li>
					<li><a href="#">Operation FTP</a>
							<ul>
								<li><a href="SHostOpeFTPModifs.php">Modifications</a></li>
								<li><a href="SHostOpeFTPRenvSSH.php">Renvoi SSH</a></li>
								<li><a href="SHostOpeFTPDel.php">Suppressions</a></li>
							</ul>
					</li>
					<li><a href="#">Restauration</a>
							<ul>
								<li><a href="SHostRestoreFTP.php">FTP</a></li>
								<li><a href="SHostRestoreSQL.php">SQL</a></li>
							</ul>
					</li>
					<li><a href="#">Sauvegardes</a>
							<ul>
								<li><a href="SHostSaveFTP.php">FTP</a></li>
								<li><a href="SHostSaveSQL.php">SQL</a></li>
							</ul>
					</li>
					<li><a href="#">SQL</a>
							<ul>
								<li><a href="SHostSQLExp.php">Export</a></li>
								<li><a href="SHostSQLImport.php">Import</a></li>
							</ul>
					</li>
					<li><a href="#">SSL</a>
							<ul>
								<li><a href="SHostSSLComoDV.php">Comodo DV</a></li>
								<li><a href="SHostSSLComoEV.php">Comodo EV</a></li>
								<li><a href="SHostSSLLE.php">Let's Encrypt</a></li>
							</ul>
					</li>
					<li><a href="#">Statistiques</a>
							<ul>
								<li><a href="SHostStatsBruts.php">Brutes</a></li>
								<li><a href="SHostStatsUrchAWS.php">Urchin/AWStats</a></li>
							</ul>
					</li>
					<li><a href="#">Suppression</a>
							<ul>
								<li><a href="SHostDelHost.php">Hosting</a></li>
								<li><a href="SHostDelMails.php">Mails Associés</a></li>
								<li><a href="SHostDelStart10.php">Start10m</a></li>
							</ul>
					</li>
					<li><a href="#">Suspicious</a>
							<ul>
								<li><a href="SHostSuspiciousForm.php">Formulaire</a></li>
								<li><a href="SHostSuspiciousRise.php">Levee</a></li>
								<li><a href="SHostSuspiciousCustSPM.php">SPAM Client</a></li>
								<li><a href="SHostSuspiciousHackSPM.php">SPAM Hack</a></li>
							</ul>
					</li>
					<li><a href="#">Visibilite Pro</a></li>
					<li><a href="#">Web Paas</a>
							<ul>
								<li><a href="SHostWBPaasCmd.php">Commande</a></li>
								<li><a href="SHostWBPaasIssue.php">Incident</a></li>
								<li><a href="SHostWBPaasUse.php">Utilisation</a></li>
							</ul>
					</li>
				</ul>
		</li>
		<li><a href="#">SQL Privé/Cloud DB</a>
				<ul>
					<li><a href="SSQLCDBCmd.php">Commande</a></li>
					<li><a href="SSQLCDBErrors.php">Erreurs</a></li>
					<li><a href="SSQLCDBIPGW.php">IP GW</a></li>
					<li><a href="SSQLCDBImportKO.php">Import KO</a></li>
					<li><a href="SSQLCDBBadDC.php">Mauvais DC</a></li>
					<li><a href="SSQLCDBOOMKILL.php">OOMKILL</a></li>
					<li><a href="SSQLCDBRecreate.php">Re-creation</a></li>
					<li><a href="SSQLCDBUse.php">Utilisation</a></li>
				</ul>
		</li>
		<li><a href="#">MX Plan (Old)</a>
				<ul>
					<li><a href="SMXPOContacts.php">Change Contacts</a></li>
					<li><a href="SMXPODelegation.php">Compte delegation</a></li>
					<li><a href="#">Configuration Logiciel</a>
						<ul>
								<li><a href="SMXPOLogicielErr.php">Erreurs</a></li>
								<li><a href="SMXPOLogicielGuide.php">Renvoi Guides</a></li>
						</ul>
					</li>
					<li><a href="#">Creation</a>
							<ul>
								<li><a href="SMXPOCreaCpte.php">Comptes</a></li>
								<li><a href="SMXPOCreaFiltre.php">Filtres</a></li>
								<li><a href="SMXPOCreaML.php">Mailing Liste</a></li>
								<li><a href="SMXPOCreaRedir.php">Redirections</a></li>
								<li><a href="SMXPOCreaRepondeurs.php">Repondeurs</a></li>
								<li><a href="SMXPOCreaSrvc.php">Service</a></li>
							</ul>
					</li>
					<li><a href="#">Edition</a>
							<ul>
								<li><a href="SMXPOEditML.php">Mailing List</a></li>
								<li><a href="SMXPOEditPswd.php">Mot de passe</a></li>
								<li><a href="SMXPOEditNoLocalCpy.php">No Local Copy</a></li>
								<li><a href="SMXPOEditRedir.php">Redirections</a></li>
								<li><a href="SMXPOEditRespond.php">Repondeurs</a></li>
							</ul>
					</li>
					<li><a href="#">Envoi KO</a>
							<ul>
								<li><a href="SMXPOSendKOOther.php">Autres cas</a></li>
								<li><a href="SMXPOSendKOSPMLck.php">Bloqué SPAM</a></li>
								<li><a href="SMXPOSendKOIPLck.php">IP out Locked</a></li>
								<li><a href="SMXPOSendKOSPMBX.php">Spambox</a></li>
							</ul>
					</li>
					<li><a href="SMXPOBadMX.php">Mauvais MX</a></li>
					<li><a href="#">Migration New MXP</a>
							<ul>
								<li><a href="SMXPOMigNMXPContacts.php">Contacts KO</a></li>
								<li><a href="SMXPOMigNMXPAsk.php">Demande</a></li>
								<li><a href="SMXPOMigNMXPErrors.php">Erreurs</a></li>
							</ul>
					</li>
					<li><a href="#">Migration Mail Pro</a>
							<ul>
								<li><a href="SMXPOMigMPAuto.php">Automatique</a></li>
								<li><a href="SMXPOMigMPErrors.php">Erreurs</a></li>
								<li><a href="SMXPOMigMPManu.php">Manuel</a></li>
							</ul>
					</li>
					<li><a href="#">Migration Exchange</a>
							<ul>
								<li><a href="SMXPOMigExchAuto.php">Automatique</a></li>
								<li><a href="SMXPOMigExchErrors.php">Erreurs</a></li>
								<li><a href="SMXPOMigExchManu.php">Manuel</a></li>
							</ul>
					</li>
					<li><a href="SMXPOOldRefDeletion.php">Old Reference</a></li>
					<li><a href="#">Overquota</a>
							<ul>
								<li><a href="SMXPOOverquota5Go.php">Passage 5Go</a></li>
								<li><a href="SMXPOOverquotaGene.php">Toutes possibilités</a></li>
							</ul>
					</li>
					<li><a href="#">Réception KO</a>
							<ul>
								<li><a href="SMXPORecepKOOthers.php">Autres cas</a></li>
								<li><a href="SMXPORecepKOFiltres.php">Filtres</a></li>
								<li><a href="SMXPORecepKORetention.php">Retention</a></li>
								<li><a href="SMXPORecepKOSPM.php">SPAM</a></li>
								<li><a href="SMXPORecepKOVirus.php">Virus</a></li>
							</ul>
					</li>
					<li><a href="#">Restauration</a>
							<ul>
								<li><a href="SMXPORestoreCpteDel.php">Compte Kill</a></li>
								<li><a href="SMXPORestoreMailDel.php">Mails Disparus</a></li>
							</ul>
					</li>
					<li><a href="SMXPOServExt.php">Service Externe</a></li>
					<li><a href="SMXPOSuppr.php">Suppression</a></li>
					<li><a href="#">Webmail</a>
							<ul>
								<li><a href="SMXPOWebmailErrors.php">Erreur interne</a></li>
								<li><a href="SMXPOWebmailPswd.php">Mot de passe KO</a></li>
								<li><a href="SMXPOWebmailUse.php">Utilisation</a></li>
							</ul>
					</li>
				</ul>
		</li>
		<li><a href="#">MX Plan (New)</a>
				<ul>
					<li><a href="SNMXPChangeContacts.php">Change Contacts</a></li>
					<li><a href="#">Config Logiciel</a>
							<ul>
								<li><a href="SNMXPConfigErr.php">Erreurs</a></li>
								<li><a href="SNMXPConfigGuides.php">Renvoi Guide</a></li>
							</ul>
					</li>
					<li><a href="#">Creation</a>
							<ul>
								<li><a href="SNMXPCreaAlias.php">Alias</a></li>
								<li><a href="SNMXPCreaCmd.php">Commande</a></li>
								<li><a href="SNMXPCreaCpte.php">Comptes</a></li>
								<li><a href="SNMXPCreaExtContacts.php">Contacts Externes</a></li>
								<li><a href="SNMXPCreaDelegation.php">Delegations</a></li>
								<li><a href="SNMXPCreaML.php">Mailing Liste</a></li>
								<li><a href="SNMXPCreaPdP.php">Pieds de pages</a></li>
								<li><a href="SNMXPCreaRedir.php">Redirections</a></li>
								<li><a href="SNMXPCreaRules.php">Règles</a></li>
								<li><a href="SNMXPCreaRespond.php">Repondeurs</a></li>
							</ul>
					</li>
					<li><a href="#">Edition</a>
							<ul>
								<li><a href="SNMXPEditAlias.php">Alias</a></li>
								<li><a href="SNMXPEditCpte.php">Comptes</a></li>
								<li><a href="SNMXPEditExtContacts.php">Contacts Externes</a></li>
								<li><a href="SNMXPEditDelegation.php">Delegations</a></li>
								<li><a href="SNMXPEditML.php">Mailing Liste</a></li>
								<li><a href="SNMXPEditPdP.php">Pieds de pages</a></li>
								<li><a href="SNMXPEditRedir.php">Redirections</a></li>
								<li><a href="SNMXPEditRules.php">Règles</a></li>
								<li><a href="SNMXPEditRespond.php">Repondeurs</a></li>
							</ul>
					</li>
					<li><a href="#">Envoi KO</a>
							<ul>
								<li><a href="SNMXPSendKOOthers.php">Autres cas</a></li>
								<li><a href="SNMXPSendSPMLck.php">Bloqué SPAM</a></li>
								<li><a href="SNMXPSendIPLck.php">IP out Locked</a></li>
								<li><a href="SNMXPSendSpmbx.php">Spambox</a></li>
								<li><a href="SNMXPSendSPMDesti.php">SPAM Destinataire</a></li>
							</ul>
					</li>
					<li><a href="SNMXPFctsIndispo.php">Fonctions indisponibles</a></li>
					<li><a href="SNMXPBadMX.php">Mauvais MX</a></li>
					<li><a href="#">Migration Mail Pro</a>
							<ul>
								<li><a href="SNMXPMigMPErr.php">Erreurs</a></li>
								<li><a href="SNMXPMigMPManu.php">Manuel</a></li>
							</ul>
					</li>
					<li><a href="#">Migration Exchange</a>
							<ul>
								<li><a href="SNMXPMigExchErr.php">Erreurs</a></li>
								<li><a href="SNMXPMigExchManu.php">Manuel</a></li>
							</ul>
					</li>
					<li><a href="SNMXPOldRef.php">Old Reference</a></li>
					<li><a href="SNMXPOverquota.php">Overquota</a></li>
					<li><a href="#">Politique Sécurité</a>
							<ul>
								<li><a href="SNMXPPolSecuMdpKO.php">Mots de passe KO</a></li>
								<li><a href="SNMXPPolSecuUse.php">Utilisation</a></li>
							</ul>
					</li>
					<li><a href="#">Réception KO</a>
							<ul>
								<li><a href="SNMXPRecepKOOthers.php">Autres cas</a></li>
								<li><a href="SNMXPRecepKOLckAutorized.php">Bloqué/Autorisé</a></li>
								<li><a href="SNMXPRecepKORules.php">Regles</a></li>
								<li><a href="SNMXPRecepKORetention.php">Retention</a></li>
								<li><a href="SNMXPRecepKOSPM.php">SPAM</a></li>
								<li><a href="SNMXPRecepKOVirus.php">Virus</a></li>
							</ul>
					</li>
					<li><a href="#">Restauration</a>
							<ul>
								<li><a href="SNMXPRestoreCpteKill.php">Compte Kill</a></li>
								<li><a href="SNMXPRestoreMailDel.php">Mails Disparus</a></li>
							</ul>
					</li>
					<li><a href="SNMXPExtSrvc.php">Service Externe</a></li>
					<li><a href="SNMXPSuppr.php">Suppression</a></li>
					<li><a href="#">Webmail</a>
							<ul>
								<li><a href="SNMXPWebmailErr.php">Erreur interne</a></li>
								<li><a href="SNMXPWebmailMDPKO.php">Mot de passe KO</a></li>
								<li><a href="SNMXPWebmailUse.php">Utilisation</a></li>
							</ul>
					</li>
				</ul>
		</li>
		<li><a href="#">Mail Pro</a>
				<ul>
					<li><a href="#">Commande</a>
							<ul>
								<li><a href="SEmPCmdPlat.php">Plateforme</a></li>
								<li><a href="SEmPCmdFirstConf.php">First Config</a></li>
							</ul>
					</li>
					<li><a href="SEmPChangeContacts.php">Change Contacts</a></li>
					<li><a href="#">Config Logiciel</a>
							<ul>
								<li><a href="SEmPConfigLgcErr.php">Erreurs</a></li>
								<li><a href="SEmPConfigLgcGuide.php">Renvoi Guide</a></li>
							</ul>
					</li>
					<li><a href="#">Creation</a>
							<ul>
								<li><a href="SEmPCreaAlias.php">Alias</a></li>
								<li><a href="SEmPCreaAutorit.php">Autoritatif</a></li>
								<li><a href="SEmPCreaCal.php">Calendrier</a></li>
								<li><a href="SEmPCreaAddCpte.php">Commande Cpte</a></li>
								<li><a href="SEmPCreaCpte.php">Comptes</a></li>
								<li><a href="SEmPCreaExtContacts.php">Contacts Externes</a></li>
								<li><a href="SEmPCreaDelegation.php">Delegations</a></li>
								<li><a href="SEmPCreaAssDom.php">Domaines Associés</a></li>
								<li><a href="SEmPCreaDossierPartage.php">Dossiers Partagés</a></li>
								<li><a href="SEmPCreaPdp.php">Pieds de pages</a></li>
								<li><a href="SEmPCreaRedir.php">Redirections</a></li>
								<li><a href="SEmPCreaRules.php">Règles</a></li>
								<li><a href="SEmPCreaRespond.php">Repondeurs</a></li>
							</ul>
					</li>
					<li><a href="#">Edition</a>
							<ul>
								<li><a href="SEmPEditAlias.php">Alias</a></li>
								<li><a href="SEmPEditAutorit.php">Autoritatif</a></li>
								<li><a href="SEmPEditCal.php">Calendrier</a></li>
								<li><a href="SEmPEditCpte.php">Comptes</a></li>
								<li><a href="SEmPEditExtContacts.php">Contacts Externes</a></li>
								<li><a href="SEmPEditDelegation.php">Delegations</a></li>
								<li><a href="SEmPEditAssDom.php">Domaines Associés</a></li>
								<li><a href="SEmPEditDossierPartage.php">Dossiers Partagés</a></li>
								<li><a href="SEmPEditPdp.php">Pieds de pages</a></li>
								<li><a href="SEmPEditRedir.php">Redirections</a></li>
								<li><a href="SEmPEditRules.php">Règles</a></li>
								<li><a href="SEmPEditRespond.php">Repondeurs</a></li>
							</ul>
					</li>
					<li><a href="#">Envoi KO</a>
							<ul>
								<li><a href="SEmPSendKOAutorit.php">Autoritatif</a></li>
								<li><a href="SEmPSendKOOthers.php">Autres cas</a></li>
								<li><a href="SEmPSendKOSPMLck.php">Bloqué SPAM</a></li>
								<li><a href="SEmPSendKOIPLck.php">IP out Locked</a></li>
								<li><a href="SEmPSendKOSpmbx.php">Spambox</a></li>
								<li><a href="SEmPSendKOSPMDesti.php">SPAM Destinataire</a></li>
							</ul>
					</li>
					<li><a href="SEmPFctsIndispo.php">Fonctions indisponibles</a></li>
					<li><a href="SEmPBadMX.php">Mauvais MX</a></li>
					<li><a href="#">Migration MX Plan</a>
							<ul>
								<li><a href="SEmPMigMXPErr.php">Erreurs</a></li>
								<li><a href="SEmPMigMXPManu.php">Manuel</a></li>
							</ul>
					</li>
					<li><a href="#">Migration Exchange</a>
							<ul>
								<li><a href="SEmPMigExchErr.php">Erreurs</a></li>
								<li><a href="SEmPMigExchManu.php">Manuel</a></li>
							</ul>
					</li>
					<li><a href="SEmPOldRef.php">Old Reference</a></li>
					<li><a href="SEmPOverquota.php">Overquota</a></li>
					<li><a href="#">Politique Sécurité</a>
							<ul>
								<li><a href="SEmPPolSecuMDPKO.php">Mots de passe KO</a></li>
								<li><a href="SEmPPolSecuUses.php">Utilisation</a></li>
							</ul>
					</li>
					<li><a href="#">Réception KO</a>
							<ul>
								<li><a href="SEmPRecepKOOthers.php">Autres cas</a></li>
								<li><a href="SEmPRecepKOAutorit.php">Autoritatif</a></li>
								<li><a href="SEmPRecepKOLckAutorized.php">Bloqué/Autorisé</a></li>
								<li><a href="SEmPRecepKORules.php">Regles</a></li>
								<li><a href="SEmPRecepKORetention.php">Retention</a></li>
								<li><a href="SEmPRecepKOSPM.php">SPAM</a></li>
								<li><a href="SEmPRecepKOVirus.php">Virus</a></li>
							</ul>
					</li>
					<li><a href="#">Restauration</a>
							<ul>
								<li><a href="SEmPRestoreCpteDel.php">Compte Kill</a></li>
								<li><a href="SEmPRestoreMailsDel.php">Mails Disparus</a></li>
							</ul>
					</li>
					<li><a href="SEmPExtSrvc.php">Service Externe</a></li>
					<li><a href="#">Suppression</a>
							<ul>
								<li><a href="SEmPSupprReinitCpte.php">Réinitialisation Cpte</a></li>
								<li><a href="SEmPSupprDissocDom.php">Dissocier Domaine</a></li>
								<li><a href="SEmPSupprPlatform.php">Plateforme</a></li>
							</ul>
					</li>
					<li><a href="#">Webmail</a>
							<ul>
								<li><a href="SEmPWebmailErr.php">Erreur interne</a></li>
								<li><a href="SEmPWebmailMdPKO.php">Mot de passe KO</a></li>
								<li><a href="SEmPWebmailUses.php">Utilisation</a></li>
							</ul>
					</li>
				</ul>
		</li>
		<li><a href="#">Exchange</a>
				<ul>
					<li><a href="#">Commande</a>
							<ul>
								<li><a href="SExchCmdPlatform.php">Plateforme</a></li>
								<li><a href="SExchCmdFirstConf.php">First Config</a></li>
								<li><a href="SExchCmdOLLink">Licences OL</a></li>
							</ul>
					</li>
					<li><a href="SExchChangeContacts.php">Change Contacts</a></li>
					<li><a href="#">Config Logiciel</a>
							<ul>
								<li><a href="SExchConfigLgclErr.php">Erreurs</a></li>
								<li><a href="SExchConfigLgclGuides.php">Renvoi Guide</a></li>
								<li><a href="SExchConfigLgclSRV.php">SRV</a></li>
							</ul>
					</li>
					<li><a href="#">Creation</a>
							<ul>
								<li><a href="SExchCreaAlias.php">Alias</a></li>
								<li><a href="SExchCreaAutoritatif.php">Autoritatif</a></li>
								<li><a href="SExchCreaCalendrier.php">Calendrier</a></li>
								<li><a href="SExchCreaCmdCpte.php">Commande Cpte</a></li>
								<li><a href="SExchCreaCptes.php">Comptes</a></li>
								<li><a href="SExchCreaExtContacts.php">Contacts Externes</a></li>
								<li><a href="SExchCreaDelegations.php">Delegations</a></li>
								<li><a href="SExchCreaAssDom.php">Domaines Associés</a></li>
								<li><a href="SExchCreaDossiersPartages.php">Dossiers Partagés</a></li>
								<li><a href="SExchCreaGroups.php">Groupes</a></li>
								<li><a href="SExchCreaPdp.php">Pieds de pages</a></li>
								<li><a href="SExchCreaRedir.php">Redirections</a></li>
								<li><a href="SExchCreaRules.php">Règles</a></li>
								<li><a href="SExchCreaRespond.php">Repondeurs</a></li>
								<li><a href="SExchCreaRessources.php">Ressources</a></li>
							</ul>
					</li>
					<li><a href="#">Edition</a>
							<ul>
								<li><a href="SExchEditAlias.php">Alias</a></li>
								<li><a href="SExchEditAutoritatif.php">Autoritatif</a></li>
								<li><a href="SExchEditCalendrier.php">Calendrier</a></li>
								<li><a href="SExchEditCptes.php">Comptes</a></li>
								<li><a href="SExchEditExtContacts.php">Contacts Externes</a></li>
								<li><a href="SExchEditDelegations.php">Delegations</a></li>
								<li><a href="SExchEditAssDom.php">Domaines Associés</a></li>
								<li><a href="SExchEditDossiersPartages.php">Dossiers Partagés</a></li>
								<li><a href="SExchEditGroups.php">Groupes</a></li>
								<li><a href="SExchEditPdp.php">Pieds de pages</a></li>
								<li><a href="SExchEditRedir.php">Redirections</a></li>
								<li><a href="SExchEditRules.php">Règles</a></li>
								<li><a href="SExchEditRespond.php">Repondeurs</a></li>
								<li><a href="SExchEditRessources.php">Ressources</a></li>
							</ul>
					</li>
					<li><a href="#">Envoi KO</a>
							<ul>
								<li><a href="SExchSendKOAutoritatif.php">Autoritatif</a></li>
								<li><a href="SExchSendKOOthers.php">Autres cas</a></li>
								<li><a href="SExchSPMLck.php">Bloqué SPAM</a></li>
								<li><a href="SExchIPOutLck.php">IP out Locked</a></li>
								<li><a href="SExchSpmbx.php">Spambox</a></li>
								<li><a href="SExchSPMDesti.php">SPAM Destinataire</a></li>
							</ul>
					</li>
					<li><a href="SExchFctsIndispo.php">Fonctions indisponibles</a></li>
					<li><a href="SExchInfogerances.php">Infogerances</a></li>
					<li><a href="SExchBadMX.php">Mauvais MX</a></li>
					<li><a href="#">Migration MX Plan</a>
							<ul>
								<li><a href="SExchMigMXPErr.php">Erreurs</a></li>
								<li><a href="SExchMigMXPManu.php">Manuel</a></li>
							</ul>
					</li>
					<li><a href="#">Migration Mail Pro</a>
							<ul>
								<li><a href="SExchMigEmPErr.php">Erreurs</a></li>
								<li><a href="SExchMigEmPManu.php">Manuel</a></li>
							</ul>
					</li>
					<li><a href="SExchOldRef.php">Old Reference</a></li>
					<li><a href="#">Overquota</a>
							<ul>
								<li><a href="SExchOverquota300Go.php">300 Go</a></li>
								<li><a href="SExchOverquotaMax.php">Max atteint</a></li>
							</ul>
					</li>
					<li><a href="#">Politique Sécurité</a>
							<ul>
								<li><a href="SExchPolSecuDKIMSPF.php">DKIM/SPF</a></li>
								<li><a href="SExchPolSecuMdPKO.php">Mots de passe KO</a></li>
								<li><a href="SExchPolSecuUses.php">Utilisation</a></li>
							</ul>
					</li>
					<li><a href="#">PST</a>
							<ul>
								<li><a href="SExchPSTErr.php">Erreurs</a></li>
								<li><a href="SExchPSTUses.php">Utilisation</a></li>
							</ul>
					</li>
					<li><a href="#">Réception KO</a>
					<ul>
								<li><a href="SExchRecepKOOthers.php">Autres cas</a></li>
								<li><a href="SExchRecepKOAutoritatif.php">Autoritatif</a></li>
								<li><a href="SExchRecepKOLckAutorized.php">Bloqué/Autorisé</a></li>
								<li><a href="SExchRecepKORules.php">Regles</a></li>
								<li><a href="SExchRecepKORetention.php">Retention</a></li>
								<li><a href="SExchRecepKOSPM.php">SPAM</a></li>
								<li><a href="SExchRecepKOVirus.php">Virus</a></li>
							</ul>
					</li>
					<li><a href="SExchRenewSSL.php">Renew SSL</a></li>
					<li><a href="#">Restauration</a>
							<ul>
								<li><a href="SExchRestoreCpteDel.php">Compte Kill</a></li>
								<li><a href="SExchRestoreMailsDel.php">Mails Disparus</a></li>
							</ul>
					</li>
					<li><a href="SExchExtSrvc.php">Service Externe</a></li>
					<li><a href="#">Suppression</a>
							<ul>
								<li><a href="SExchSupprReinitCpte.php">Réinitialisation Cpte</a></li>
								<li><a href="SExchSupprDissocDom.php">Dissocier Domaine</a></li>
								<li><a href="SExchSupprPlatform.php">Plateforme</a></li>
							</ul>
					</li>
					<li><a href="#">Webmail</a>
							<ul>
								<li><a href="SExchWebmailErr.php">Erreur interne</a></li>
								<li><a href="SExchWebmailMdpKO.php">Mot de passe KO</a></li>
								<li><a href="SExchWebmailUses.php">Utilisation</a></li>
							</ul>
					</li>
				</ul>
		</li>
		<li><a href="#">Microsoft</a>
				<ul>
					<li><a href="SMSChangeContacts.php">Change Contacts</a></li>
					<li><a href="#">CSP1</a>
							<ul>
								<li><a href="SMSCSP1Cmd.php">Commande</a></li>
								<li><a href="SMSCSP1Config.php">Configuration</a></li>
								<li><a href="SMSCSP1Edit.php">Edition</a></li>
								<li><a href="SMSCSP1Err.php">Erreurs</a></li>
								<li><a href="SMSCSP1LimOffre.php">Limites Offres</a></li>
								<li><a href="SMSCSP1LimSupport.php">Limites support</a></li>
								<li><a href="SMSCSP1RDS.php">RDS</a></li>
								<li><a href="SMSCSP1Suppr.php">Suppression</a></li>
							</ul>
					</li>
					<li><a href="#">CSP2</a>
							<ul>
								<li><a href="SMSCSP2Cmd.php">Commande</a></li>
								<li><a href="SMSCSP2Config.php">Configuration</a></li>
								<li><a href="SMSCSP2Edit.php">Edition</a></li>
								<li><a href="SMSCSP2ErrOVH.php">Erreurs OVH</a></li>
								<li><a href="SMSCSP2LimOffres.php">Limites Offres</a></li>
								<li><a href="SMSCSP2LimSupport.php">Limites support</a></li>
								<li><a href="SMSCSP2Offers.php">Offres</a></li>
								<li><a href="SMSCSP2RemonteMS.php">Remontée MS</a></li>
								<li><a href="SMSCSP2Suppr.php">Suppression</a></li>
								<li><a href="SMSCSP2Up.php">Upgrade</a></li>
							</ul>
					</li>
					<li><a href="#">SharePoint</a>
							<ul>
								<li><a href="SMSSPCmdSA.php">Commande SA</a></li>
								<li><a href="SMSSPCmdLink.php">Commande Linked</a></li>
								<li><a href="SMSSPConfig.php">Configuration</a></li>
								<li><a href="SMSSPEdit.php">Edition</a></li>
								<li><a href="SMSSPErr.php">Erreurs</a></li>
								<li><a href="SMSSPLimOffre.php">Limites Offres</a></li>
								<li><a href="SMSSPLimSupport.php">Limites support</a></li>
								<li><a href="SMSSPMigra.php">Migration</a></li>
								<li><a href="SMSSPSSL.php">SSL</a></li>
								<li><a href="SMSSPSuppr.php">Suppression</a></li>
							</ul>
					</li>
				</ul>
		</li>
	</ul>
	</div>           
</br>
</br>
</body>
</html>