/*
 * File: app/view/MyTabPanel.js
 *
 * This file was generated by Sencha Architect version 2.2.0.
 * http://www.sencha.com/products/architect/
 *
 * This file requires use of the Ext JS 4.2.x library, under independent license.
 * License of Sencha Architect does not include license for Ext JS 4.2.x. For more
 * details see http://www.sencha.com/license or contact license@sencha.com.
 *
 * This file will be auto-generated each and everytime you save your project.
 *
 * Do NOT hand edit this file.
 */

Ext.define('SOLO.view.MyTabPanel', {
    extend: 'Ext.tab.Panel',
    alias: 'widget.mytabpanel',

    id: 'MainPanel',
    plain: true,

    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            listeners: {
                render: {
                    fn: me.onMainPanelRender,
                    scope: me
                }
            }
        });

        me.callParent(arguments);
    },

    onMainPanelRender: function(component, eOpts) {

        var tabs_model = Ext.create('SOLO.store.MainPanelStore');

        tabs_model.addListener('load', function(store, records){
            store.each(function(rec){
                component.add(rec.data);
            });
        });

    }

});