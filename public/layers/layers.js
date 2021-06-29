var wms_layers = [];


        var lyr_OpenStreetMap_0 = new ol.layer.Tile({
            'title': 'OpenStreetMap',
            'type': 'base',
            'opacity': 1.000000,
            
            
            source: new ol.source.XYZ({
    attributions: ' ',
                url: 'https://tile.openstreetmap.org/{z}/{x}/{y}.png'
            })
        });
var lyr_Kerawanan_1 = new ol.layer.Image({
                            opacity: 1,
                            title: "Kerawanan",
                            
                            
                            source: new ol.source.ImageStatic({
                               url: "Kerawanan_1.png",
    attributions: ' ',
                                projection: 'EPSG:3857',
                                alwaysInRange: true,
                                imageExtent: [12176029.486025, -874320.363908, 12226786.100926, -832238.497727]
                            })
                        });
var format_BatasKecamatan_2 = new ol.format.GeoJSON();
var features_BatasKecamatan_2 = format_BatasKecamatan_2.readFeatures(json_BatasKecamatan_2, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_BatasKecamatan_2 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_BatasKecamatan_2.addFeatures(features_BatasKecamatan_2);
var lyr_BatasKecamatan_2 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_BatasKecamatan_2, 
                style: style_BatasKecamatan_2,
                interactive: true,
                title: '<img src="styles/legend/BatasKecamatan_2.png" /> Batas Kecamatan'
            });
var format_RuteKeTPS_3 = new ol.format.GeoJSON();
var features_RuteKeTPS_3 = format_RuteKeTPS_3.readFeatures(json_RuteKeTPS_3, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_RuteKeTPS_3 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_RuteKeTPS_3.addFeatures(features_RuteKeTPS_3);
var lyr_RuteKeTPS_3 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_RuteKeTPS_3, 
                style: style_RuteKeTPS_3,
                interactive: true,
                title: '<img src="styles/legend/RuteKeTPS_3.png" /> Rute Ke TPS'
            });
var format_RuteKeTPA_4 = new ol.format.GeoJSON();
var features_RuteKeTPA_4 = format_RuteKeTPA_4.readFeatures(json_RuteKeTPA_4, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_RuteKeTPA_4 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_RuteKeTPA_4.addFeatures(features_RuteKeTPA_4);
var lyr_RuteKeTPA_4 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_RuteKeTPA_4, 
                style: style_RuteKeTPA_4,
                interactive: true,
                title: '<img src="styles/legend/RuteKeTPA_4.png" /> Rute Ke TPA'
            });
var format_RuteKeTES_5 = new ol.format.GeoJSON();
var features_RuteKeTES_5 = format_RuteKeTES_5.readFeatures(json_RuteKeTES_5, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_RuteKeTES_5 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_RuteKeTES_5.addFeatures(features_RuteKeTES_5);
var lyr_RuteKeTES_5 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_RuteKeTES_5, 
                style: style_RuteKeTES_5,
                interactive: true,
                title: '<img src="styles/legend/RuteKeTES_5.png" /> Rute Ke TES'
            });
var format_RuteKeTEA_6 = new ol.format.GeoJSON();
var features_RuteKeTEA_6 = format_RuteKeTEA_6.readFeatures(json_RuteKeTEA_6, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_RuteKeTEA_6 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_RuteKeTEA_6.addFeatures(features_RuteKeTEA_6);
var lyr_RuteKeTEA_6 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_RuteKeTEA_6, 
                style: style_RuteKeTEA_6,
                interactive: true,
                title: '<img src="styles/legend/RuteKeTEA_6.png" /> Rute Ke TEA'
            });
var format_RuteKeSaranaKesehatan_7 = new ol.format.GeoJSON();
var features_RuteKeSaranaKesehatan_7 = format_RuteKeSaranaKesehatan_7.readFeatures(json_RuteKeSaranaKesehatan_7, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_RuteKeSaranaKesehatan_7 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_RuteKeSaranaKesehatan_7.addFeatures(features_RuteKeSaranaKesehatan_7);
var lyr_RuteKeSaranaKesehatan_7 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_RuteKeSaranaKesehatan_7, 
                style: style_RuteKeSaranaKesehatan_7,
                interactive: true,
                title: '<img src="styles/legend/RuteKeSaranaKesehatan_7.png" /> Rute Ke Sarana Kesehatan'
            });
var format_TitikLokasiEvakuasi_8 = new ol.format.GeoJSON();
var features_TitikLokasiEvakuasi_8 = format_TitikLokasiEvakuasi_8.readFeatures(json_TitikLokasiEvakuasi_8, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_TitikLokasiEvakuasi_8 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_TitikLokasiEvakuasi_8.addFeatures(features_TitikLokasiEvakuasi_8);
var lyr_TitikLokasiEvakuasi_8 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_TitikLokasiEvakuasi_8, 
                style: style_TitikLokasiEvakuasi_8,
                interactive: true,
    title: 'Titik Lokasi Evakuasi<br />\
    <img src="styles/legend/TitikLokasiEvakuasi_8_0.png" /> Sarana Kesehatan<br />\
    <img src="styles/legend/TitikLokasiEvakuasi_8_1.png" /> Tempat Evakuasi Akhir<br />\
    <img src="styles/legend/TitikLokasiEvakuasi_8_2.png" /> Tempat Evakuasi Sementara<br />\
    <img src="styles/legend/TitikLokasiEvakuasi_8_3.png" /> Tempat Pengungsian Akhir<br />\
    <img src="styles/legend/TitikLokasiEvakuasi_8_4.png" /> Tempat Pengungsian Sementara<br />'
        });
var format_SumberGempa_9 = new ol.format.GeoJSON();
var features_SumberGempa_9 = format_SumberGempa_9.readFeatures(json_SumberGempa_9, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_SumberGempa_9 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_SumberGempa_9.addFeatures(features_SumberGempa_9);
var lyr_SumberGempa_9 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_SumberGempa_9, 
                style: style_SumberGempa_9,
                interactive: true,
                title: '<img src="styles/legend/SumberGempa_9.png" /> Sumber Gempa'
            });

lyr_OpenStreetMap_0.setVisible(true);lyr_Kerawanan_1.setVisible(true);lyr_BatasKecamatan_2.setVisible(false);lyr_RuteKeTPS_3.setVisible(true);lyr_RuteKeTPA_4.setVisible(true);lyr_RuteKeTES_5.setVisible(true);lyr_RuteKeTEA_6.setVisible(true);lyr_RuteKeSaranaKesehatan_7.setVisible(true);lyr_TitikLokasiEvakuasi_8.setVisible(true);lyr_SumberGempa_9.setVisible(true);
var layersList = [lyr_OpenStreetMap_0,lyr_Kerawanan_1,lyr_BatasKecamatan_2,lyr_RuteKeTPS_3,lyr_RuteKeTPA_4,lyr_RuteKeTES_5,lyr_RuteKeTEA_6,lyr_RuteKeSaranaKesehatan_7,lyr_TitikLokasiEvakuasi_8,lyr_SumberGempa_9];
lyr_BatasKecamatan_2.set('fieldAliases', {'Kabupaten': 'Kabupaten', 'Kecamatan': 'Kecamatan', 'No': 'No', 'desa': 'desa', });
lyr_RuteKeTPS_3.set('fieldAliases', {'start': 'start', 'end': 'end', 'cost': 'cost', });
lyr_RuteKeTPA_4.set('fieldAliases', {'start': 'start', 'end': 'end', 'cost': 'cost', });
lyr_RuteKeTES_5.set('fieldAliases', {'start': 'start', 'end': 'end', 'cost': 'cost', });
lyr_RuteKeTEA_6.set('fieldAliases', {'start': 'start', 'end': 'end', 'cost': 'cost', });
lyr_RuteKeSaranaKesehatan_7.set('fieldAliases', {'start': 'start', 'end': 'end', 'cost': 'cost', });
lyr_TitikLokasiEvakuasi_8.set('fieldAliases', {'id': 'id', 'Nama': 'Nama', 'Jenis TE': 'Jenis TE', });
lyr_SumberGempa_9.set('fieldAliases', {'Kedalaman': 'Kedalaman', 'Kekuatan': 'Kekuatan', 'Sumber': 'Sumber', 'Tahun': 'Tahun', });
lyr_BatasKecamatan_2.set('fieldImages', {'Kabupaten': 'TextEdit', 'Kecamatan': 'TextEdit', 'No': 'TextEdit', 'desa': 'Range', });
lyr_RuteKeTPS_3.set('fieldImages', {'start': 'TextEdit', 'end': 'TextEdit', 'cost': 'TextEdit', });
lyr_RuteKeTPA_4.set('fieldImages', {'start': 'TextEdit', 'end': 'TextEdit', 'cost': 'TextEdit', });
lyr_RuteKeTES_5.set('fieldImages', {'start': 'TextEdit', 'end': 'TextEdit', 'cost': 'TextEdit', });
lyr_RuteKeTEA_6.set('fieldImages', {'start': 'TextEdit', 'end': 'TextEdit', 'cost': 'TextEdit', });
lyr_RuteKeSaranaKesehatan_7.set('fieldImages', {'start': 'TextEdit', 'end': 'TextEdit', 'cost': 'TextEdit', });
lyr_TitikLokasiEvakuasi_8.set('fieldImages', {'id': 'TextEdit', 'Nama': 'TextEdit', 'Jenis TE': 'TextEdit', });
lyr_SumberGempa_9.set('fieldImages', {'Kedalaman': 'TextEdit', 'Kekuatan': 'TextEdit', 'Sumber': 'TextEdit', 'Tahun': 'TextEdit', });
lyr_BatasKecamatan_2.set('fieldLabels', {'Kabupaten': 'inline label', 'Kecamatan': 'inline label', 'No': 'inline label', 'desa': 'inline label', });
lyr_RuteKeTPS_3.set('fieldLabels', {'start': 'inline label', 'end': 'inline label', 'cost': 'inline label', });
lyr_RuteKeTPA_4.set('fieldLabels', {'start': 'inline label', 'end': 'inline label', 'cost': 'inline label', });
lyr_RuteKeTES_5.set('fieldLabels', {'start': 'inline label', 'end': 'inline label', 'cost': 'inline label', });
lyr_RuteKeTEA_6.set('fieldLabels', {'start': 'inline label', 'end': 'inline label', 'cost': 'inline label', });
lyr_RuteKeSaranaKesehatan_7.set('fieldLabels', {'start': 'inline label', 'end': 'inline label', 'cost': 'inline label', });
lyr_TitikLokasiEvakuasi_8.set('fieldLabels', {'id': 'no label', 'Nama': 'inline label', 'Jenis TE': 'inline label', });
lyr_SumberGempa_9.set('fieldLabels', {'Kedalaman': 'inline label', 'Kekuatan': 'inline label', 'Sumber': 'inline label', 'Tahun': 'inline label', });
lyr_SumberGempa_9.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});