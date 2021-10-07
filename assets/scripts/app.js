//DATA AREA
const UIfilter = document.querySelector("#data-filter");
const UItable = document.querySelector("#data-area");

//DATA PERSONAL AREA
const UIfilterPersonalArea = document.querySelector("#filter-PersonalArea");
const UItablePersonalArea = document.querySelector("#data-personal-area");

//DATA PERSONAL SUB AREA
const UIfilterPersonalSubArea = document.querySelector("#filter-PersonalSubArea");
const UItablePersonalSubArea = document.querySelector("#data-PersonalSubArea");

//DATA KELOMPOK PESERTA
const UIfilterKelompokPeserta = document.querySelector("#filter-KelompokPeserta");
const UItableKelompokPeserta = document.querySelector("#data-KelompokPeserta");

//DATA GRUP JENIS PESERTA
const UIfilterGrupJenisPeserta = document.querySelector("#filter-grupJenisPeserta");
const UItableGrupJenisPeserta = document.querySelector("#data-grupJenisPeserta"); 

//DATA JENIS PESERTA
const UIfilterjenisPeserta = document.querySelector("#filter-jenisPeserta");
const UItablejenisPeserta = document.querySelector("#data-jenisPeserta"); 

//DATA RULE JENIS PESERTA
const UIfilterRuleJenisPeserta = document.querySelector("#filter-ruleJenisPeserta");
const UItableruleJenisPeserta = document.querySelector("#data-ruleJenisPeserta"); 

//DATA INSTANSI
const UIfilterInstansi = document.querySelector("#filter-instansi");
const UItableInstansi = document.querySelector("#data-instansi"); 

//DATA PEKERJAAN
const UIfilterPekerjaan = document.querySelector("#filter-pekerjaan");
const UItablePekerjaan = document.querySelector("#data-pekerjaan"); 

//DATA DIVISI
const UIfilterDivisi = document.querySelector("#filter-divisi");
const UItableDivisi = document.querySelector("#data-divisi"); 

//DATA DIVISI
const UIfilterBagian = document.querySelector("#filter-bagian");
const UItableBagian = document.querySelector("#data-bagian");

//DATA BANK
const UIfilterBank = document.querySelector("#filter-bank");
const UItableBank = document.querySelector("#data-bank"); 

//DATA JENIS TRANSAKSI
const UIfilterJenisTransaksi = document.querySelector("#filter-jenisTransaksi");
const UItableJenisTransaksi = document.querySelector("#data-jenisTransaksi"); 

//DATA KELOMPOK TRANSAKSI
const UIfilterKelompokTransaksi = document.querySelector("#filter-kelompokTransaksi");
const UItableKelompokTransaksi = document.querySelector("#data-kelompokTransaksi"); 

//DATA BAND POSISI
const UIfilterBandPosisi = document.querySelector("#filter-bandPosisi");
const UItableBandPosisi = document.querySelector("#data-bandPosisi");

//DATA BAND POSISI PENSIUNAN
const UIfilterBandPensiun = document.querySelector("#filter-bandPensiun");
const UItableBandPensiun = document.querySelector("#data-bandPensiun");

//DATA KOTA KANTOR
const UIfilterKotaKantor = document.querySelector("#filter-kotaKantor");
const UItableKotaKantor = document.querySelector("#data-kotaKantor");

//DATA HR HOST
const UIfilterHrHost = document.querySelector("#filter-hrHost");
const UItableHrHost = document.querySelector("#data-hrHost");

//DATA TPK
const UIfilterTPK = document.querySelector("#filter-tpk");
const UItableTPK = document.querySelector("#data-tpk");

//DATA Provinsi
const UIfilterProvinsi = document.querySelector("#filter-provinsi");
const UItableProvinsi = document.querySelector("#data-provinsi");

//DATA Kabupaten
const UIfilterKabupaten = document.querySelector("#filter-kabupaten");
const UItableKabupaten = document.querySelector("#data-kabupaten");

//DATA KECAMATAN
const UIfilterKecamatan = document.querySelector("#filter-kecamatan");
const UItableKecamatan = document.querySelector("#data-kecamatan");

//DATA ROLE
const UIfilterRole = document.querySelector("#filter-RoleP");
const UItableRole = document.querySelector("#data-RoleP"); 

//DATA USERS
const UIfilterDataUser = document.querySelector("#filter-dataUsers");
const UItableDataUser = document.querySelector("#data-dataUsers"); 

//DATA MODULES
const UIfilterModules = document.querySelector("#filter-Modules");
const UItableModules = document.querySelector("#data-Modules");

//GET DATA FROM TABLE
const UIareaInputAdd = document.querySelector("#table-area");
const UIPersonalAreaInputAdd = document.querySelector("#table-PersonalArea");
const UIPersonalSubAreaInputAdd = document.querySelector("#table-PersonalSubArea");
const UIKelompokPesertaInputAdd = document.querySelector("#table-KelompokPeserta");
const UIRoleInputAdd = document.querySelector("#table-RoleP");
const UIDataUserInputAdd = document.querySelector("#table-dataUsers");

try {
    UIfilter.addEventListener("input", function(){
        filterData(UItable, UIfilter);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterPersonalArea.addEventListener("input", function(){
        filterData(UItablePersonalArea, UIfilterPersonalArea);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterPersonalSubArea.addEventListener("input", function(){
        filterData(UItablePersonalSubArea, UIfilterPersonalSubArea);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterKelompokPeserta.addEventListener("input", function(){
        filterData(UItableKelompokPeserta, UIfilterKelompokPeserta);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterGrupJenisPeserta.addEventListener("input", function(){
        filterData(UItableGrupJenisPeserta, UIfilterGrupJenisPeserta);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterjenisPeserta.addEventListener("input", function(){
        filterData(UItablejenisPeserta, UIfilterjenisPeserta);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterRuleJenisPeserta.addEventListener("input", function(){
        filterData(UItableruleJenisPeserta,UIfilterRuleJenisPeserta);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterInstansi.addEventListener("input", function(){
        filterData(UItableInstansi,UIfilterInstansi);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterPekerjaan.addEventListener("input", function(){
        filterData(UItablePekerjaan,UIfilterPekerjaan);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterDivisi.addEventListener("input", function(){
        filterData(UItableDivisi,UIfilterDivisi);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterBagian.addEventListener("input", function(){
        filterData(UItableBagian,UIfilterBagian);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterBank.addEventListener("input", function(){
        filterData(UItableBank,UIfilterBank);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterJenisTransaksi.addEventListener("input", function(){
        filterData(UItableJenisTransaksi,UIfilterJenisTransaksi);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterKelompokTransaksi.addEventListener("input", function(){
        filterData(UItableKelompokTransaksi,UIfilterKelompokTransaksi);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterBandPosisi.addEventListener("input", function(){
        filterData(UItableBandPosisi,UIfilterBandPosisi);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterBandPensiun.addEventListener("input", function(){
        filterData(UItableBandPensiun,UIfilterBandPensiun);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterKotaKantor.addEventListener("input", function(){
        filterData(UItableKotaKantor,UIfilterKotaKantor);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterHrHost.addEventListener("input", function(){
        filterData(UItableHrHost,UIfilterHrHost);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterTPK.addEventListener("input", function(){
        filterData(UItableTPK,UIfilterTPK);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterProvinsi.addEventListener("input", function(){
        filterData(UItableProvinsi,UIfilterProvinsi);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterKabupaten.addEventListener("input", function(){
        filterData(UItableKabupaten,UIfilterKabupaten);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterKecamatan.addEventListener("input", function(){
        filterData(UItableKecamatan,UIfilterKecamatan);
    });
} catch {
    console.warn("error cyin");
}

try {
    UIfilterRole.addEventListener("input", function(){
        filterData(UItableRole, UIfilterRole);
    });
} catch (error) {
    console.warn("error cyiin");
}

try {
    UIfilterDataUser.addEventListener("input", function(){
        filterData(UItableDataUser, UIfilterDataUser);
    });
} catch (error) {
    console.warn("error cyiin");
}

try {
    UIfilterModules.addEventListener("input", function(){
        filterData(UItableModules, UIfilterModules);
    })
} catch (error) {
    console.warn("error cyiin");
}

//UPDATE & DELETE AREA
try {
    UIareaInputAdd.addEventListener("click", function(e){
        let temp;
        if (e.target.className.indexOf("target-button") != -1){
            if(e.target.className.indexOf("fas") != -1){
                temp = e.target.parentElement;
            } else {
                temp = e.target;
            }
            temp = temp.parentElement;
    
            let namaArea = temp.previousSibling.previousSibling.textContent;
    
            let kodeArea = temp.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
    
            setTimeout( function(){
                const UIinputKodeArea = document.querySelector("#kode-area");
                const UIinputNamaArea = document.querySelector("#nama-area");
                const UIinputSingkatanArea = document.querySelector("#singkatan-area");
                UIinputNamaArea.value = namaArea; 
                UIinputKodeArea.value = kodeArea;
                UIinputSingkatanArea.value = namaArea;
            }, 200);
        }
    
        if (e.target.className.indexOf("target-button-delete") != -1){
            if(e.target.className.indexOf("fas") != -1){
                temp = e.target.parentElement;
            } else {
                temp = e.target;
            }
            temp = temp.parentElement;
    
            let kodeArea = temp.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
    
            setTimeout( function(){
                const UIinputDelete = document.querySelector("#delete-input");
                UIinputDelete.value = kodeArea;
            }, 200);
        }
    });
} catch {
    console.warn("error cyin");
}

//UPDATE & DELETE PERSONAL AREA
try {
    UIPersonalAreaInputAdd.addEventListener("click", function(e){
        let temp;
        if (e.target.className.indexOf("edit-button-personalArea") != -1){
            if(e.target.className.indexOf("fas") != -1){
                temp = e.target.parentElement;
            } else {
                temp = e.target;
            }

            temp = temp.parentElement;
    
            let statusAktifPersonal = temp.previousSibling.previousSibling.textContent;
            let namaPersonal = temp.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
            let kodePersonalArea = temp.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.textContent;

            setTimeout( function(){
                const UIinputKodePersonalArea = document.querySelector("#kode_PersonalArea");
                const UIinputNamaPersonalArea = document.querySelector("#nama_PersonalArea");
                const UIinputStatusPersonalArea1 = document.querySelector("#status_PersonalArea1");
                const UIinputStatusPersonalArea0 = document.querySelector("#status_PersonalArea0");
                UIinputKodePersonalArea.value = kodePersonalArea; 
                UIinputNamaPersonalArea.value = namaPersonal;

                if (statusAktifPersonal === "1"){
                    UIinputStatusPersonalArea1.checked = true;
                } else {
                    UIinputStatusPersonalArea0.checked = true;
                }

            }, 200);
        }
    
        if (e.target.className.indexOf("delete-button-personalArea") != -1){
            if(e.target.className.indexOf("fas") != -1){
                temp = e.target.parentElement;
            } else {
                temp = e.target;
            }

            temp = temp.parentElement;
    
            let kodePersonalArea = temp.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
    
            setTimeout( function(){
                const UIinputDelete = document.querySelector("#delete-personal-area");
                UIinputDelete.value = kodePersonalArea;
            }, 200);
        }
    });
} catch {
    console.warn("error cyin");
}

//UPDATE & DELETE PERSONAL SUB AREA
try {
    UIPersonalSubAreaInputAdd.addEventListener("click", function(e){
        let temp;
        if (e.target.className.indexOf("edit-button-personalSubArea") != -1){
            if(e.target.className.indexOf("fas") != -1){
                temp = e.target.parentElement;
            } else {
                temp = e.target;
            }
            temp = temp.parentElement;
            
            let statusAktifPersonalSub = temp.previousSibling.previousSibling.textContent;
            let namaPersonalSub = temp.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
            let kodePersonalSubArea = temp.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
            let kodePersonalArea = temp.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.textContent;

            setTimeout( function(){
                const UIinputKodePersonalSubArea = document.querySelector("#kode_PersonalSubArea");
                const UIinputNamaPersonalSubArea = document.querySelector("#nama_PersonalSubArea");
                const UIinputKodePersonalArea = document.querySelector("#PersonalArea");
                const UIinputStatusPersonalSubArea1 = document.querySelector("#statusPersonalSubArea1");
                const UIinputStatusPersonalSubArea0 = document.querySelector("#statusPersonalSubArea0");

                UIinputKodePersonalSubArea.value = kodePersonalSubArea; 
                UIinputNamaPersonalSubArea.value = namaPersonalSub;

                let tempArea = Array.from(UIinputKodePersonalArea.options);
                tempArea.forEach(data => {
                    if (kodePersonalArea === data.value){
                        UIinputKodePersonalArea.value = data.value;
                    }
                });

                if (statusAktifPersonalSub === "1"){
                    UIinputStatusPersonalSubArea1.checked = true;
                } else {
                    UIinputStatusPersonalSubArea0.checked = true;
                }

            }, 200);
        }
    
        if (e.target.className.indexOf("delete-button-personalSubArea") != -1){
            if(e.target.className.indexOf("fas") != -1){
                temp = e.target.parentElement;
            } else {
                temp = e.target;
            }

            temp = temp.parentElement;
    
            let kodePersonalSubArea = temp.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
    
            setTimeout( function(){
                const UIinputDelete = document.querySelector("#delete-personal-Subarea");
                UIinputDelete.value = kodePersonalSubArea;
            }, 200);
        }
    });
} catch {
    console.warn("error cyin");
}

//UPDATE & DELETE KELOMPOK PESERTA
try {
    UIKelompokPesertaInputAdd.addEventListener("click", function(e){
        let temp;
        if (e.target.className.indexOf("edit-button-KelompokPeserta") != -1){
            if(e.target.className.indexOf("fas") != -1){
                temp = e.target.parentElement;
            } else {
                temp = e.target;
            }
            temp = temp.parentElement;
    
            let namaKelompokPeserta = temp.previousSibling.previousSibling.textContent;
            let kodeKelompokPeserta = temp.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
    
            setTimeout( function(){
                const UIinputKodeKelompokPeserta = document.querySelector("#kode-KelompokPeserta");
                const UIinputNamaKelompokPeserta = document.querySelector("#nama-KelompokPeserta");

                UIinputNamaKelompokPeserta.value = namaKelompokPeserta; 
                UIinputKodeKelompokPeserta.value = kodeKelompokPeserta;
            }, 200);
        }
    
        if (e.target.className.indexOf("delete-button-KelompokPeserta") != -1){
            if(e.target.className.indexOf("fas") != -1){
                temp = e.target.parentElement;
            } else {
                temp = e.target;
            }
            temp = temp.parentElement;
    
            let kodeArea = temp.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
    
            setTimeout( function(){
                const UIinputDelete = document.querySelector("#delete-KelompokPeserta");
                UIinputDelete.value = kodeArea;
            }, 200);
        }
    });
} catch {
    console.warn("error cyin");
}

//UPDATE & DELETE ROLE
try {
    UIRoleInputAdd.addEventListener("click", function(e){
        let temp;
        if (e.target.className.indexOf("edit-button-RoleP") != -1){
            if(e.target.className.indexOf("fas") != -1){
                temp = e.target.parentElement;
            } else {
                temp = e.target;
            }
            temp = temp.parentElement;
    
            let namaRole = temp.previousSibling.previousSibling.textContent;
            let kodeRole = temp.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
    
            setTimeout( function(){
                const UIinputKodeRole = document.querySelector("#kode-RoleP");
                const UIinputNamaRole = document.querySelector("#nama-RoleP");

                UIinputNamaRole.value = namaRole; 
                UIinputKodeRole.value = kodeRole;
            }, 200);
        }
    
        if (e.target.className.indexOf("delete-button-RoleP") != -1){
            if(e.target.className.indexOf("fas") != -1){
                temp = e.target.parentElement;
            } else {
                temp = e.target;
            }
            temp = temp.parentElement;
    
            let kodeRole = temp.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
    
            setTimeout( function(){
                const UIinputDelete = document.querySelector("#delete-RoleP");
                UIinputDelete.value = kodeRole;
            }, 200);
        }
    });
} catch {
    console.warn("error cyin");
}

//UPDATE & DELETE DATA USERS
try {
    UIDataUserInputAdd.addEventListener("click", function(e){
        let temp;
        if (e.target.className.indexOf("edit-button-dataUsers") != -1){
            if(e.target.className.indexOf("fas") != -1){
                temp = e.target.parentElement;
            } else {
                temp = e.target;
            }
            temp = temp.parentElement;
    
            let statusDataUsers = temp.previousSibling.previousSibling.textContent;
            let areaDataUsers = temp.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
            let roleDataUsers = temp.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
            let namaDataUsers = temp.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
            let usernameDataUsers = temp.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
            let kodeDataUsers = temp.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.textContent;

            setTimeout( function(){
                const UIinputKodeDataUsers = document.querySelector("#kode_DataUsers");
                const UIinputNamaDataUsers = document.querySelector("#nama_DataUsers");
                const UIinputUsernameDataUsers = document.querySelector("#username_DataUsers");
                const UIinputRoleDataUsers = document.querySelector("#role_DataUsers");
                const UIinputAreaDataUsers = document.querySelector("#area_DataUsers");
                const UIinputStatusDataUser1 = document.querySelector("#Radio1_DataUsers");
                const UIinputStatusDataUser0 = document.querySelector("#Radio0_DataUsers");

                UIinputNamaDataUsers.value = namaDataUsers; 
                UIinputKodeDataUsers.value = kodeDataUsers;
                UIinputUsernameDataUsers.value = usernameDataUsers;

                let x = Array.from(UIinputRoleDataUsers.options);
                x.forEach(data => {
                    if (roleDataUsers === data.textContent){
                        UIinputRoleDataUsers.value = data.value;
                    }
                });

                let temp = Array.from(UIinputAreaDataUsers.options);
                temp.forEach(data => {
                    if (areaDataUsers === data.textContent){
                        UIinputAreaDataUsers.value = data.value;
                    }
                });

                if (statusDataUsers === "1"){
                    UIinputStatusDataUser1.checked = true;
                } else {
                    UIinputStatusDataUser0.checked = true;
                }
            }, 200);
        }
    
        if (e.target.className.indexOf("delete-button-dataUsers") != -1){
            if(e.target.className.indexOf("fas") != -1){
                temp = e.target.parentElement;
            } else {
                temp = e.target;
            }
            temp = temp.parentElement;
    
            let kodeDataUsers = temp.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
    
            setTimeout( function(){
                const UIinputDelete = document.querySelector("#delete-DataUsers");
                UIinputDelete.value = kodeDataUsers;
            }, 200);
        }
    });
} catch {
    console.warn("error cyin");
}

//UPDATE & DELETE MODULES

function filterData(data, input){
    let counter = 0;
    data.childNodes.forEach(function(row, index){
        if (row.nodeType === 1){

            let temp = row.childNodes;

            counter = 0;

            temp.forEach(function(data){
                if (data.nodeType === 1){
                    if (data.textContent.toLowerCase().indexOf(input.value) != -1){
                        counter++;
                    } 
                }
            });

            if (counter > 0) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        }
    });
}

// function copyText(elementArea){
//     // Create a "hidden" input
//     var aux = document.createElement("input");
//     // Assign it the value of the specified element
//     var content = document.getElementById(elementArea).innerHTML;
//     //input to aux
//     aux.setAttribute("value", content);
//     // Append it to the body
//     document.body.appendChild(aux);
//     // Highlight its content
//     aux.select();
//     // Copy the highlighted text
//     document.execCommand("copy");
//     // Remove it from the body
//     document.body.removeChild(aux);
// }


// cek-hak-kepesertaan
const UIinputBandFilter = document.querySelector("#inputBandFilter");
const UIinputAreaFilter = document.querySelector("#inputAreaFilter");
const UItableCekHak = document.querySelector("#UItableCekHak");
const UIinputFilterType = document.querySelector("#inputFilterType");

try {
    document.querySelector("#inputAreaFilter").addEventListener("click", function(e){
        let temp = UItableCekHak.childNodes;
    
        temp.forEach(data => {
            if (data.nodeType === 1){
                let x = data.firstChild.nextSibling;
    
                if (x.textContent.indexOf(UIinputAreaFilter.value) != -1){
                    x.parentElement.style.display = "";
                } else {
                    x.parentElement.style.display = "none";
                }
                    
            }
        });
    })
} catch {

}

try {
    document.querySelector("#inputBandFilter").addEventListener("click", function(e){
        let temp = UItableCekHak.childNodes;
    
        temp.forEach(data => {
            if (data.nodeType === 1){
                let x = data.firstChild.nextSibling.nextSibling.nextSibling;
    
                if (x.textContent.indexOf(UIinputBandFilter.value) != -1){
                    x.parentElement.style.display = "";
                } else {
                    x.parentElement.style.display = "none";
                }
                    
            }
        });
    })
} catch {

}

try {
    //FIND
    document.querySelector("#inputFilterType").addEventListener("input", function(){
        let temp = UItableCekHak.childNodes;

        temp.forEach(data => {
            if (data.nodeType === 1){
                let x = data.childNodes;

                counter = 0;

                x.forEach(a => {
                    if (a.nodeType === 1){
                        if (data.textContent.toLowerCase().indexOf(UIinputFilterType.value) != -1){
                            counter++;
                        } 
                    }
                });

                if (counter > 0) {
                    data.style.display = "";
                } else {
                    data.style.display = "none";
                }
                    
            }
        });
    })
} catch {

}

