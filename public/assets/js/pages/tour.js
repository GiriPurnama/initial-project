// Report Management
    var reportTitle = new Tour({
        name: "tour",
        steps: [
                    {
                        element: "#shipment-entry",
                        title: "Shipment Entry",
                        content: "Shipment Entry adalah TO Picklist yang akan diproses menjadi DO"
                    },
                    {
                        element: "#shipment-entry-priority",
                        title: "Shipment Entry Priority",
                        content: "Shipment Entry Priority adalah TO Picklist yang diprioritaskan untuk diproses menjadi DO"
                    },
                    {
                        element: "#do-posting",
                        title: "DO Posting",
                        content: "DO Posting adalah TO Number yang sudah menjadi DO"
                    },
                    {
                        element: "#wh-loading",
                        title: "WH Loading",
                        content: "WH Loading adalah DO yang sudah siap untuk melakukan pengiriman atau sedang dalam pengiriman"
                    },
                    {
                        element: "#do-closing",
                        title: "DO Closing",
                        content: "DO Closing adalah DO yang sudah selesai melakukan pengiriman dan sudah kembali ke gudang"
                    },
                    {
                        element: "#vendor-tracking",
                        title: "Vendor Tracking",
                        content: "Vendor Tracking adalah Pelacakan posisi terakhir dari DO yang akan diinfokan oleh pihak vendor"
                    },
                    {
                        element: "#undelivered-order",
                        title: "Undelivered Order",
                        content: "Undelivered Order adalah DO yang tidak bisa terkirim dikarenakan ada kejadian tidak terduga dilapangan"
                    }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""    
    });

    var reportAll = new Tour({
        name: "tour",
        steps: [
                    {
                        element: "#report-wh-loading-all",
                        title: "By All",
                        content: "By All adalah untuk melihat isi laporan secara umum"
                    },
                    {
                        element: "#report-wh-loading-brand",
                        title: "By Brand",
                        content: "By Brand adalah untuk melihat isi laporan berdasarkan Brand"
                    },
                    {
                        element: "#report-wh-loading-pickup",
                        title: "By Pickup",
                        content: "By Pickup adalah untuk melihat isi laporan berdasarkan Pickup Name"
                    },
                    {
                        element: "#report-wh-loading-drop",
                        title: "By Drop",
                        content: "By Drop adalah untuk melihat isi laporan berdasarkan Drop Name"
                    },
                    {
                        element: "#report-wh-loading-region",
                        title: "By Region",
                        content: "By Region adalah untuk melihat isi laporan berdasarkan Region"
                    },
                    {
                        element: "#report-wh-loading-channel",
                        title: "By Channel",
                        content: "By Channel adalah untuk melihat isi laporan berdasarkan Channel"
                    },
                    {
                        element: "#report-wh-loading-status",
                        title: "By Status",
                        content: "By Status adalah untuk melihat isi laporan berdasarkan Status"
                    }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""    
    });

    var reportOpen = new Tour({
        name: "tour",
        steps: [
                    {
                        element: "#shipment-entry-only",
                        title: "Pilih Laporan",
                        content: "Pilih laporan yang akan dibuka"
                    },
                    {
                        element: "#report-shipment-entry",
                        title: "Klik jenis laporan ",
                        content: "klik jenis laporan yang akan dibuka"
                    }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""    
    });
// End Report Management

// Vendor Management
    var vendorDetail = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#vendor-table",
                    title: "Vendor Management",
                    content: "Vendor Management adalah list vendor yang terdaftar pada sistem"
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""    
    });

    var createVendor = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#vendor-table",
                    title: "Buka Vendor Management",
                    content: "Buka vendor management untuk membuat vendor baru"
                },
                {
                    element: "#create-vendor",
                    title: "Klik Create Vendor",
                    content: "Lalu klik vendor create untuk membuat vendor"
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""
    });

    var editVendor = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#list-vendor",
                    title: "Pilih list vendor",
                    content: "Pilih list vendor yang akan diedit"
                },
                {
                    element: "#list-edit",
                    title: "Klik Button Edit",
                    content: "Klik button edit untuk mengubah data vendor"
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""
    });

    var deleteVendor = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#list-vendor",
                    title: "Pilih list vendor",
                    content: "Pilih list vendor yang akan dihapus"
                },
                {
                    element: "#list-delete",
                    title: "Klik Button Delete",
                    content: "Klik button delete untuk menghapus data vendor"
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""
    });
// End Vendor Management

// Lead Time Management
    var leadDetail = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#lead-table",
                    title: "Lead Time Management",
                    content: "Lead Time Management adalah list lead time yang terdaftar pada sistem"
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""    
    });

    var createLead = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#lead-table",
                    title: "Buka Lead Time Management",
                    content: "Buka Lead Time Management untuk membuat lead time baru"
                },
                {
                    element: "#create-lead",
                    title: "Klik Create Lead Time",
                    content: "Lalu klik create lead time untuk membuat lead time"
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""
    });

    var editLead = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#list-table",
                    title: "Pilih list Lead Time",
                    content: "Pilih list Lead Time yang akan diedit"
                },
                {
                    element: "#list-edit",
                    title: "Klik Button Edit",
                    content: "Klik button edit untuk mengubah data Lead Time"
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""
    });

    var deleteLead = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#list-table",
                    title: "Pilih list Lead Time",
                    content: "Pilih list Lead Time yang akan dihapus"
                },
                {
                    element: "#list-delete",
                    title: "Klik Button Delete",
                    content: "Klik button delete untuk menghapus data Lead Time"
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""
    });
// End Lead Time Management

// User Management
    var createUser = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#user-table",
                    title: "Buka User Management",
                    content: "Buka User Management untuk membuat User baru"
                },
                {
                    element: "#create-user",
                    title: "Klik Create User ",
                    content: "Lalu klik create user untuk membuat user"
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""
    });

    var editUser = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#list-table",
                    title: "Pilih list user",
                    content: "Pilih list User yang akan diedit"
                },
                {
                    element: "#list-edit",
                    title: "Klik Button Edit",
                    content: "Klik button edit untuk mengubah data User"
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""
    });

    var deleteUser = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#list-table",
                    title: "Pilih list user",
                    content: "Pilih list User yang akan dihapus"
                },
                {
                    element: "#list-delete",
                    title: "Klik Button Delete",
                    content: "Klik button delete untuk menghapus data User"
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""
    });

     var viewRole = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#data-role",
                    title: "Pilih Data Role",
                    content: "Pilih Data Role untuk melihat list Role"
                },
                {
                    element: "#table-role",
                    title: "List Role ",
                    content: "Tampil list role yang ada pada sistem"
                },
                {
                    element: "#list-data",
                    title: "Pilih List Role",
                    content: "Pilih List Role yang akan dilihat"
                },
                {
                    element: "#view-data",
                    title: "Klik View Data",
                    content: "Klik View Data untuk melihat detail role"
                }


            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: "",
        onNext: function (tour) { 
            $('.nav-link').click();
        }
    });
// End User Management

// Reconciliation Management
    var detailRecon = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#title-recon",
                    title: "Reconciliation Management",
                    content: "Reconciliation Management adalah halaman khusus yang dibuat untuk melihat histori, input do balikan dan melihat status order"
                },
                {
                    element: "#filter-recon",
                    title: "Filter Expedition",
                    content: "Filter Expedition digunakan untuk mengubah jenis expedition berdasarkan internal atau vendor "
                },
                {
                    element: "#v-pills-tab",
                    title: "List Driver atau Vendor",
                    content: "Pada bagian ini adalah untuk melihat driver/vendor mana saja yang sedang di proses pada Reconciliation Management"
                },
                {
                    element: "#v-pills-tabContent",
                    title: "Isi Reconciliation Management",
                    content: "Ada 3 bagian dalam Reconciliation Management, In Transit, Reconciliation, dan History"
                },
                {
                    element: "#transit-recon",
                    title: "In Transit",
                    content: "Pada bagian In Transit untuk melihat status order yang sedang dalam perjalanan"
                },
                {
                    element: "#recon-order",
                    title: "Reconciliation",
                    content: "Pada bagian Reconciliation untuk melihat DO yang sudah kembali ke gudang lalu diinputkan ke dalam sistem"
                },
                {
                    element: "#history-recon",
                    title: "History",
                    content: "Pada bagian History untuk melihat driver/vendor yang sudah melakukan order apa saja dan dikirim kemana saja"
                } 
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""
    });

    var vendorRecon = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#title-recon",
                    title: "Buka Reconciliation Management",
                    content: "Buka halaman Reconciliation Management"
                },
                {
                    element: "#v-pills-home-tab",
                    title: "Pilih List Vendor",
                    content: "Pilih vendor yang akan di Reconciliation"
                },
                {
                    element: "#label-cost",
                    title: "Total Cost",
                    content: "Pastikan total cost sudah sesuai"
                },
                {
                    element: "#input-form",
                    title: "Invoice Number",
                    content: "Input Invoice Number"
                },
                {
                    element: "#submit-recon-vendor",
                    title: "Submit Invoice",
                    content: "Tekan tombol submit untuk menyimpan invoice number"
                }
                
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: "",
        onNext: function (tour) { 
            $('#tab-recon').click();
        }
    });

    var internalRecon = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#title-recon",
                    title: "Buka Reconciliation Management",
                    content: "Buka halaman Reconciliation Management"
                },
                {
                    element: "#v-pills-profile-tab",
                    title: "Pilih List Internal",
                    content: "Pilih driver Internal yang akan di Reconciliation"
                },
                {
                    element: "#received-by",
                    title: "Received By",
                    content: "Masukan Nama penerima DO Balikan"
                },
                {
                    element: "#date-input",
                    title: "Date Input",
                    content: "Masukan tanggal inputan DO Reconciliation"
                },
                {
                    element: "#send-data",
                    title: "Kirim Data",
                    content: "Tekan tombol submit untuk menyimpan data"
                },
                {
                    element: "#cost-internal",
                    title: "Input Total Cost",
                    content: "Masukan total cost yang digunakan oleh driver"
                },
                {
                    element: "#submit-recon-internal",
                    title: "Kirim Data Cost",
                    content: "Tekan tombol submit untuk menyimpan data cost"
                }

                
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: "",
        onNext: function (tour) { 
            $('.exploder').click();
            $('#v-pills-profile-tab').click();
            $('#tab-recon-internal').click();
        }
    });

    var editQty = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#title-recon",
                    title: "Buka Reconciliation Management",
                    content: "Buka halaman Reconciliation Management"
                },
                {
                    element: "#v-pills-home-tab",
                    title: "Pilih Driver/Vendor",
                    content: "Pilih Driver/Vendor yang akan di ganti QTY"
                },
                {
                    element: "#list-data",
                    title: "Pilih List Order",
                    content: "Pilih List Order yang akan di ganti QTY"
                },
                {
                    element: "#content-edit-qty",
                    title: "Edit QTY & Koli QTY",
                    content: "Klik Edit QTY & Koli QTY"
                }
                
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: "",
        onNext: function (tour) { 
            $('.exploder').click();
            $('#tab-recon').click();
            $('#btn-edit-qty').click();
        }
    });

    var undeliveredOrder = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#title-recon",
                    title: "Buka Reconciliation Management",
                    content: "Buka halaman Reconciliation Management"
                },
                {
                    element: "#v-pills-home-tab",
                    title: "Pilih Driver/Vendor",
                    content: "Pilih Driver/Vendor yang akan diubah jadi Undelivered Order"
                },
                {
                    element: "#list-data",
                    title: "Pilih List Order",
                    content: "Pilih List Order yang diubah jadi Undelivered Order"
                },
                {
                    element: "#content-undelivered-order",
                    title: "Push Undelivered Order",
                    content: "Klik Push Undelivered Order, lalu masukan reason dan submit"
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: "",
        onNext: function (tour) { 
            $('.exploder').click();
            $('#tab-recon').click();
            $('#btn-edit-qty').click();
        }
    });

    var reassignOrder = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#title-recon",
                    title: "Buka Reconciliation Management",
                    content: "Buka halaman Reconciliation Management"
                },
                {
                    element: "#v-pills-home-tab",
                    title: "Pilih Driver/Vendor",
                    content: "Pilih Driver/Vendor yang akan di Reassign Order"
                },
                {
                    element: "#list-data",
                    title: "Pilih List Order",
                    content: "Pilih List Order yang ditambahkan Reassign Order"
                },
                {
                    element: "#reassign-btn",
                    title: "Pilih Tombol Reassign Order",
                    content: "Klik tombol Reassign Order, lalu pilih TO Number, Resi/Batch No dan submit"
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: "",
        onNext: function (tour) { 
            // $('.exploder').click();
            $('#tab-recon').click();
            // $('#btn-edit-qty').click();
        }
    });
// End Reconciliation Management

// Delivery Management/Monitoring
    var detailDeliveryManagement = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#delivery-full",
                    title: "Delivery Monitoring",
                    content: "Delivery Monitoring adalah halaman khusus yang dibuat untuk melihat status pengiriman yang sedang berlangsung"
                },
                {
                    element: "#delivery-search",
                    title: "Filter Order",
                    content: "Filter Order digunakan untuk memfilter order berdasarkan status ataupun TO Number"
                },
                {
                    element: "#delivery-box",
                    title: "Delivery Region",
                    content: "Delivery Region digunakan untuk melihat secara garis besar pada setiap kota seperti jumlah In Transit, Delivery Success, Delivery Complete, dan Waiting Reconciliation"
                },
                {
                    element: "#delivery-link",
                    title: "View Detail",
                    content: "View Detail digunakan untuk melihat isi detail dari pengiriman kota tersebut"
                }
                
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""
    });
// End Delivery Management/Monitoring

// Tracking Detail
    var detailTracking = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#tracking-detail",
                    title: "Tracking Detail",
                    content: "Tracking Detail adalah detail informasi yang ditampilkan dari Delivery Monitoring"
                },
                {
                    element: "#tracking-total",
                    title: "Info Total",
                    content: "Melihat informasi total mengenai jumlah In Transit, Delivery Success, Delivery Complete, dan Waiting Reconciliation"
                },
                {
                    element: "#tracking-table",
                    title: "Table Order",
                    content: "Table Order menampilkan list order apa saja yang sudah selesai dan sedang dalam perjalanan"
                },
                {
                    element: "#tracking-modal",
                    title: "Detail Order",
                    content: "Untuk melihat isi detail dari order tersebut seperti melihat tracking dari order tersebut atau melihat isi order tersebut membawa item apa saja "
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""
    });
// End Tracking Detail

// Data Management
    var dataManagement = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#data-management",
                    title: "Data Management",
                    content: "Data Management adalah halaman khusus yang dibuat untuk memanipulasi data seperti upload data ataupun mengnonaktifkan data"
                },
                {
                    element: "#data-shipment-entry",
                    title: "Shipment Entry",
                    content: "Shipment Entry adalah TO Picklist yang akan diproses menjadi DO"
                },
                {
                    element: "#data-shipment-entry-priority",
                    title: "Shipment Entry Priority",
                    content: "Shipment Entry Priority adalah TO Picklist yang diprioritaskan untuk diproses menjadi DO"
                },
                {
                    element: "#data-do-posting",
                    title: "DO Posting",
                    content: "DO Posting adalah TO Number yang sudah menjadi DO"
                },
                {
                    element: "#data-wh-loading",
                    title: "WH Loading",
                    content: "WH Loading adalah DO yang sudah siap untuk melakukan pengiriman atau sedang dalam pengiriman"
                },
                {
                    element: "#data-do-closing",
                    title: "DO Closing",
                    content: "DO Closing adalah DO yang sudah selesai melakukan pengiriman dan sudah kembali ke gudang"
                },
                {
                    element: "#data-vendor-tracking",
                    title: "Vendor Tracking",
                    content: "Vendor Tracking adalah Pelacakan posisi terakhir dari DO yang akan diinfokan oleh pihak vendor"
                }
                
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""
    });

    var dataUpload = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#data-shipment-entry",
                    title: "Pilih List Data",
                    content: "Pilih list data yang akan diupload"
                },
                {
                    element: "#button-upload",
                    title: "Klik Tombol Upload",
                    content: "Klik tombol upload untuk mengupload data"
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: ""
    });

    var dataView = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#view-data",
                    title: "Pilih View Data",
                    content: "Pilih tab View Data untuk melihat isi list"
                },
                {
                    element: "#view-shipment-entry",
                    title: "Pilih Data",
                    content: "Pilih data yang akan dibuka"
                },
                {
                    element: "#btn-shipment-entry",
                    title: "Klik Select File",
                    content: "Klik select file untuk membuka data"
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: "",
        onNext: function (tour) { 
            // $('.exploder').click();
            $('#data-view').click();
            // $('#btn-edit-qty').click();
        }
    });

    var dataDeactive = new Tour({
        name: "tour",
        steps: [
                {
                    element: "#deactive-data",
                    title: "Pilih Deactive Data",
                    content: "Pilih tab Deactive Data untuk melihat isi list"
                },
                {
                    element: "#deactive-shipment-entry",
                    title: "Pilih Data",
                    content: "Pilih data yang akan di Deactive"
                },
                {
                    element: "#btn-shipment-entry-deactive",
                    title: "Klik Select File",
                    content: "Klik select file untuk deactive data"
                }
            ],
        container: "body",
        smartPlacement: true,
        keyboard: true,
        storage: false,
        debug: false,
        backdrop: true,
        backdropContainer: 'body',
        backdropPadding: 0,
        redirect: true,
        orphan: false,
        duration: false,
        delay: false,
        basePath: "",
        onNext: function (tour) { 
            // $('.exploder').click();
            $('#data-deactive').click();
            // $('#btn-edit-qty').click();
        }
    });

// End Data Management