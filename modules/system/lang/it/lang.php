<?php return [
  'app' => [
    'name' => 'October CMS',
    'tagline' => 'Tornare alle origini',
  ],
  'directory' => [
    'create_fail' => 'Impossibile creare la cartella: :name',
  ],
  'file' => [
    'create_fail' => 'Impossibile creare il file: :name',
  ],
  'page' => [
    'invalid_token' => [
      'label' => 'Token di protezione non valido',
    ],
  ],
  'combiner' => [
    'not_found' => 'Il file combinatore \':name\' non è stato trovato.',
  ],
  'system' => [
    'name' => 'Sistema',
    'menu_label' => 'Sistema',
    'categories' => [
      'cms' => 'CMS',
      'misc' => 'Varie',
      'logs' => 'Log',
      'mail' => 'Mail',
      'shop' => 'Negozio',
      'team' => 'Team',
      'users' => 'Utenti',
      'system' => 'Sistema',
      'social' => 'Social',
      'events' => 'Eventi',
      'customers' => 'Clienti',
      'my_settings' => 'Impostazioni personali',
    ],
  ],
  'theme' => [
    'label' => 'Tema',
    'unnamed' => 'Tema senza nome',
    'name' => [],
  ],
  'themes' => [
    'install' => 'Installa temi',
    'installed' => 'Temi installati',
    'no_themes' => 'Non ci sono temi installati dal marketplace.',
    'recommended' => 'Raccomandati',
    'remove_confirm' => 'Sei sicuro di voler rimuovere questo tema?',
  ],
  'plugin' => [
    'label' => 'Plugin',
    'unnamed' => 'Plugin senza nome',
    'name' => [],
  ],
  'plugins' => [
    'enable_or_disable' => 'Abilita o disabilita',
    'enable_or_disable_title' => 'Abilita o disabilita plugin',
    'install' => 'Installa plugin',
    'install_products' => 'Installa prodotti',
    'installed' => 'Plugin installati',
    'no_plugins' => 'Non ci sono temi installati dal marketplace.',
    'recommended' => 'Raccomandati',
    'remove' => 'Rimuovi',
    'refresh' => 'Reinstalla',
    'disabled_label' => 'Disabilitato',
    'disabled_help' => 'I plugin disabilitati sono ignorati dall\'applicazione.',
    'frozen_label' => 'Congela aggiornamenti',
    'frozen_help' => 'I plugin congelati verranno ignorati nel processo di aggiornamento.',
    'selected_amount' => 'Plugin selezionati: :amount',
    'remove_confirm' => 'Sei sicuro di voler rimuovere questo plugin?',
    'remove_success' => 'Rimozione dei plugin dal sistema eseguita con successo.',
    'refresh_success' => 'Reinstallazione dei plugin nel sistema eseguita con successo.',
    'disable_confirm' => 'Sei sicuro?',
    'disable_success' => 'Disabilitazione dei plugin eseguita con successo.',
    'enable_success' => 'Abilitazione dei plugin eseguita con successo.',
  ],
  'project' => [
    'attach' => 'Collega progetto',
    'detach' => 'Scollega progetto',
    'none' => 'Nessuno',
    'id' => [
      'missing' => 'Inserisci un ID di progetto da utilizzare.',
    ],
    'detach_confirm' => 'Sei sicuro di voler scollegare questo progetto?',
    'unbind_success' => 'Il progetto è stato scollegato con successo.',
  ],
  'settings' => [
    'search' => 'Cerca',
  ],
  'mail' => [
    'smtp_ssl' => 'Connessione SSL richiesta',
  ],
  'mail_templates' => [
    'name_comment' => 'Nome univoco utilizzato come riferimento a questo modello.',
    'test_send' => 'Invia un messaggio di prova',
    'test_confirm' => 'Invio del messaggio di prova a :email. Continuare?',
    'creating' => 'Creazione modello...',
    'creating_layout' => 'Creazione layout...',
    'saving' => 'Salvataggio modello...',
    'saving_layout' => 'Salvataggio layout...',
    'delete_confirm' => 'Eliminare questo modello?',
    'delete_layout_confirm' => 'Eliminare questo layout?',
    'deleting' => 'Eliminazione modello...',
    'deleting_layout' => 'Eliminazione layout...',
    'sending' => 'Invio del messaggio di prova...',
    'return' => 'Ritorna all\'elenco dei modelli',
  ],
  'install' => [],
  'updates' => [
    'plugin_author' => 'Autore',
    'plugin_not_found' => 'Plugin not found',
    'core_build' => 'Build :build',
    'core_build_help' => 'Disponibile l\'ultima build.',
    'themes' => 'Temi',
    'plugin_version_none' => 'Nuovo plugin',
    'plugin_current_version' => 'Versione attuale',
    'theme_new_install' => 'Installa nuovo tema.',
    'theme_extracting' => 'Estrazione tema: :name',
    'update_label' => 'Aggiorna il software',
    'update_loading' => 'Caricamento degli aggiornamenti disponibili...',
    'force_label' => 'Forza aggiornamento',
    'found' => [
      'label' => 'Trovati nuovi aggiornamenti!',
      'help' => 'Clicca Aggiorna il software per iniziare il processo di aggiornamento.',
    ],
    'none' => [
      'label' => 'Nessun aggiornamento',
      'help' => 'Nessun aggiornamento trovato.',
    ],
    'important_action' => [
      'empty' => 'Seleziona azione',
      'confirm' => 'Conferma aggiornamento',
      'skip' => 'Salta questo plugin (solo questa volta)',
      'ignore' => 'Salta questo plugin (sempre)',
    ],
    'important_action_required' => 'Azione richiesta',
    'important_view_guide' => 'Visualizza la guida per l\'aggiornamento',
    'important_alert_text' => 'Alcuni aggiornamenti necessitano della tua attenzione.',
    'details_title' => 'Dettagli plugin',
    'details_view_homepage' => 'Visualizza homepage',
    'details_current_version' => 'Versione attuale',
    'details_author' => 'Autore',
  ],
  'server' => [
    'connect_error' => 'Errore durante la connessione al server.',
    'response_not_found' => 'Il server degli aggiornamento non è stato trovato.',
    'response_invalid' => 'Il server ha fornito una risposta non valida.',
    'response_empty' => 'Il server ha fornito una risposta vuota.',
    'file_error' => 'Il server non è riuscito a consegnare il pacchetto.',
    'file_corrupt' => 'Il file è corrotto.',
  ],
  'behavior' => [
    'missing_property' => 'La classe :class deve definire la proprietà $:property utilizzata dal comportamento :behavior.',
  ],
  'config' => [
    'not_found' => 'Il file di configurazione :file definito per :location non è stato trovato.',
    'required' => 'La configurazione utilizzata in :location deve fornire un valore \':property\'.',
  ],
  'zip' => [
    'extract_failed' => 'Estrazione del file sistema \':file\' non riuscita.',
  ],
  'event_log' => [],
  'request_log' => [
    'empty_link' => 'Svuota il registro richieste',
    'empty_loading' => 'Svuotamento del registro richieste in corso...',
    'empty_success' => 'Il registro richieste è stato svuotato con successo.',
    'return_link' => 'Ritorna al registro richieste',
    'id' => 'ID',
  ],
  'permissions' => [
    'name' => 'Sistema',
    'manage_system_settings' => 'Gestisci impostazioni di sistema',
    'manage_software_updates' => 'Gestisci aggiornamenti del software',
    'access_logs' => 'Visualizza registri di sistema',
    'manage_mail_templates' => 'Gestisci i modelli e-mail',
    'manage_mail_settings' => 'Gestisci impostazioni e-mail',
    'manage_other_administrators' => 'Gestisci altri amministratori',
  ],
  'media' => [
    'invalid_path' => 'Percorso del file non valido: \':path\'.',
    'folder_size_items' => 'elementi',
  ],
];
