Ext.Loader.setConfig({
    enabled: true
});
Ext.Loader.setPath('Ext.ux', 'http://localhost/libs/extjs-4.1.1/examples/ux');
Ext.application({
    name: 'scaideasoft.inventory',
    appFolder: 'js/app/inventory',
    controllers: [
    
    ],    
    launch: function() {
        var panelInicio = Ext.create('Ext.Panel', {
            id: 'home',
            title: 'Dashboard',
            contentEl: 'content',
            bodyStyle: 'background-color: transparent',
            autoScroll: true
        });
        /*var panelPrincipal = Ext.create('Ext.tab.Panel', {
            region: 'center',
            id: 'main',
            items: [panelInicio]
        });*/

        Ext.create('Ext.container.Viewport', {
            layout: 'border',
            items: [{
                contentEl: 'header',
                region:'north'
            }, {
                id:'main',
                xtype:'tabpanel',
                region:'center',
                items:[panelInicio]
            }, {
                contentEl: 'footer',
                border: false,
                region:'south'
            }]
        });
    }
});