require.config({
             deps: [
                 'jquery',
                 'mage/translate',
                 'jquery/jquery-storageapi'
             ],
             callback: function ($) {
                 'use strict';
         
                 var dependencies = [],
                     versionObj;
         
                 $.initNamespaceStorage('mage-translation-storage');
                 $.initNamespaceStorage('mage-translation-file-version');
                 versionObj = $.localStorage.get('mage-translation-file-version');
         
                  if (versionObj.version !== '0b24dcba00355e70410609afe221f2e44c2796fc') {
                     dependencies.push(
                         'text!js-translation.json'
                     );
         
                 }
         
                 require.config({
                     deps: dependencies,
                     callback: function (string) {
                         if (typeof string === 'string') {
                             $.mage.translate.add(JSON.parse(string));
                             $.localStorage.set('mage-translation-storage', string);
                             $.localStorage.set(
                                 'mage-translation-file-version',
                                 {
                                     version: '0b24dcba00355e70410609afe221f2e44c2796fc'
                                 }
                             );
                         } else {
                             $.mage.translate.add($.localStorage.get('mage-translation-storage'));
                         }
                     }
                 });
             }
         });

