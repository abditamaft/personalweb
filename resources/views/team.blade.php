@extends('layouts.portfolio_master')

@section('content')

<div class="bg-video-wrap">
    <video class="fullscreen-video" autoplay muted loop playsinline>
        <source src="{{ asset('videos/bg-anime.mp4') }}" type="video/mp4">
    </video>
</div>
<div class="bg-overlay-dark"></div>

<div class="container py-5 mt-5">
    
    <div class="text-center mb-5 animate-enter">
        <h2 class="display-4 text-white" style="font-family: 'Death Note Font'; color: var(--gold-color); letter-spacing: 3px;">
            THE TEAM ARCHIVES
        </h2>
        <p class="text-secondary">Catatan sejarah dan bukti otentik pencapaian rekan tim.</p>
        
        <button class="btn btn-outline-warning mt-3 rounded-pill px-4" onclick="openFormModal('add')">
            <i class="fas fa-plus me-2"></i> Write New Entry
        </button>
    </div>

    <div class="table-responsive team-table-wrapper animate-enter delay-1">
        <table class="table table-borderless table-hover custom-death-table">
            <thead>
                <tr>
                    <th scope="col" width="5%">#</th>
                    <th scope="col" width="20%">CODENAME / NAME</th>
                    <th scope="col" width="20%">ACHIEVEMENT</th>
                    <th scope="col" width="10%">YEAR</th>
                    <th scope="col" width="20%">DETAILS</th>
                    <th scope="col" width="10%" class="text-center">EVIDENCE</th>
                    <th scope="col" width="15%" class="text-center">ACTION</th>
                </tr>
            </thead>
            <tbody>
                
                <tr class="table-row-item">
                    <td class="row-index">01</td>
                    <td class="row-name"><span class="dn-font">Muhammad Fitra Abdi Tama</span></td>
                    <td class="row-achieve">Contest Lord</td>
                    <td class="row-year text-warning">2026</td>
                    <td class="row-desc">Gagal di Bacotin Team Karena 100x Menang Kontes</td>
                    
                    <td class="text-center">
                        <button class="btn-evidence" onclick="showEvidence('{{ asset('img/sertifikat_kmipn.jpg') }}', 'Hackathon Winner 2024')">
                            <i class="fas fa-eye"></i> View
                        </button>
                    </td>
                    
                    <td class="text-center action-buttons">
                        <button class="btn-icon-edit me-2" onclick="openFormModal('edit')" title="Edit Entry">
                            <i class="fas fa-pen"></i>
                        </button>
                        <button class="btn-icon-delete" onclick="openDeleteModal()" title="Delete Entry">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>

                <tr class="table-row-item">
                    <td class="row-index">02</td>
                    <td class="row-name"><span class="dn-font">Lingga Wardana</span></td>
                    <td class="row-achieve">Lomba Mandi Besar</td>
                    <td class="row-year text-warning">2025</td>
                    <td class="row-desc">Kecepatan dalam membersihkan badan</td>
                    
                    <td class="text-center">
                        <button class="btn-evidence" onclick="showEvidence('{{ asset('img/sertif-light.jpg') }}', 'Mandi Besar Winner')">
                            <i class="fas fa-eye"></i> View
                        </button>
                    </td>
                    
                    <td class="text-center action-buttons">
                        <button class="btn-icon-edit me-2" onclick="openFormModal('edit')"><i class="fas fa-pen"></i></button>
                        <button class="btn-icon-delete" onclick="openDeleteModal()"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>

                <tr class="table-row-item">
                    <td class="row-index">03</td>
                    <td class="row-name"><span class="dn-font">Bayu Adi S</span></td>
                    <td class="row-achieve">Juara 1 Margin Call</td>
                    <td class="row-year text-warning">2024</td>
                    <td class="row-desc">Trading menggunakan feeling tanpa analisa</td>
                    
                    <td class="text-center">
                        <button class="btn-evidence" onclick="showEvidence('{{ asset('img/sertif-l.jpg') }}', 'Margin Call Master')">
                            <i class="fas fa-eye"></i> View
                        </button>
                    </td>

                    <td class="text-center action-buttons">
                        <button class="btn-icon-edit me-2" onclick="openFormModal('edit')"><i class="fas fa-pen"></i></button>
                        <button class="btn-icon-delete" onclick="openDeleteModal()"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>

                <tr class="table-row-item">
                    <td class="row-index">04</td>
                    <td class="row-name"><span class="dn-font">Nadila Dewi M</span></td>
                    <td class="row-achieve">Juara Harapan</td>
                    <td class="row-year text-warning">2022</td>
                    <td class="row-desc">Membangun internet atau jaringan</td>
                    
                    <td class="text-center">
                        <button class="btn-evidence" onclick="showEvidence('{{ asset('img/sertif-l.jpg') }}', 'Network Builder')">
                            <i class="fas fa-eye"></i> View
                        </button>
                    </td>

                    <td class="text-center action-buttons">
                        <button class="btn-icon-edit me-2" onclick="openFormModal('edit')"><i class="fas fa-pen"></i></button>
                        <button class="btn-icon-delete" onclick="openDeleteModal()"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>

<div id="evidenceModal" class="evidence-modal" onclick="closeEvidence(event)">
    <div class="evidence-content animate-zoom">
        <span class="close-evidence" onclick="closeEvidence(event)">&times;</span>
        <h3 id="evidenceTitle" class="text-center text-warning mb-3" style="font-family: 'Death Note Font'; letter-spacing: 2px;">EVIDENCE FILE</h3>
        <div class="evidence-frame">
            <img id="evidenceImage" src="" alt="Certificate Evidence">
        </div>
        <div class="text-center mt-3">
            <p class="text-secondary small">CONFIDENTIAL ARCHIVE // DO NOT DISTRIBUTE</p>
        </div>
    </div>
</div>


<div id="formModal" class="evidence-modal">
    <div class="evidence-content animate-zoom" style="width: 500px;">
        <span class="close-evidence" onclick="closeFormModal()">&times;</span>
        
        <h3 id="formTitle" class="text-center text-warning mb-4" style="font-family: 'Death Note Font'; letter-spacing: 2px;">
            WRITE NEW ENTRY
        </h3>
        
        <form onsubmit="event.preventDefault(); closeFormModal();" class="death-form">
            <div class="mb-3">
                <label class="text-secondary small">CODENAME / NAME</label>
                <input type="text" class="form-control bg-dark text-white border-secondary" placeholder="Enter Name">
            </div>
            <div class="mb-3">
                <label class="text-secondary small">ACHIEVEMENT</label>
                <input type="text" class="form-control bg-dark text-white border-secondary" placeholder="Enter Achievement Title">
            </div>
            <div class="row">
                <div class="col-6 mb-3">
                    <label class="text-secondary small">YEAR</label>
                    <input type="number" class="form-control bg-dark text-white border-secondary" placeholder="2024">
                </div>
                <div class="col-6 mb-3">
                    <label class="text-secondary small">EVIDENCE FILE</label>
                    <input type="file" class="form-control bg-dark text-white border-secondary">
                </div>
            </div>
            <div class="mb-3">
                <label class="text-secondary small">DETAILS</label>
                <textarea class="form-control bg-dark text-white border-secondary" rows="3" placeholder="Description..."></textarea>
            </div>
            
            <button type="submit" class="btn btn-warning w-100 fw-bold mt-2">SAVE ENTRY</button>
        </form>
    </div>
</div>


<div id="deleteModal" class="evidence-modal">
    <div class="evidence-content animate-zoom text-center" style="width: 400px; border-color: #dc3545;">
        <h3 class="text-danger mb-3" style="font-family: 'Death Note Font'; letter-spacing: 2px;">DELETE ENTRY?</h3>
        <p class="text-white mb-4">Are you sure you want to erase this name from the archive? This action cannot be undone.</p>
        
        <div class="d-flex justify-content-center gap-3">
            <button class="btn btn-outline-secondary px-4" onclick="closeDeleteModal()">CANCEL</button>
            <button class="btn btn-danger px-4" onclick="closeDeleteModal()">DELETE</button>
        </div>
    </div>
</div>

@endsection