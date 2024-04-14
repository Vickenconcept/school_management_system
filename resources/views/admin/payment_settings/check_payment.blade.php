<style>
    .profile_img {
        display: flex;
        justify-content: center;
    }

    .student_simg {
        display: flex;
        justify-content: center;
    }

    .name_title h4 {
        font-size: 14px;
        font-weight: 500;
    }

    .text {
        border-top: 1px solid #817e7e21;

    }

    .text h4 {
        border-bottom: 1px solid #817e7e21;
        padding-bottom: 7px;
        padding-top: 5px;
        font-size: 14px;
        font-weight: 400;
    }

    .text h4:last-child {
        border-bottom: none;
    }
</style>

<div class="row">
    <div class="col-12">
        <div class="school_name">
            <h2 class="text-center">{{ DB::table('schools')->where('id', auth()->user()->school_id)->value('title') }}
            </h2>
        </div>
    </div>
</div>

<section class="studnt_profile">
    <div class="container">
        <div class="row">
            <div class="">
                <?php
                $extension = pathinfo($invoices->document_image, PATHINFO_EXTENSION);
                $fileType = '';
                
                // Determine the file type based on the file extension
                switch ($extension) {
                    case 'pdf':
                        $fileType = 'pdf';
                        break;
                    case 'jpg':
                    case 'png':
                        $fileType = 'image';
                        break; // Add break statement here
                    default:
                        $fileType = 'default'; // Fixed typo: 'defult' to 'default'
                        break;
                }
                
                ?>

                @if ($fileType === 'image')
                   <div class="" style=" height:400px; background-image: url('{{ $invoices->document_image }}'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                </div>
                @elseif ($fileType === 'pdf')
                    <embed src="{{ $invoices->document_image }}#toolbar=0" type="application/pdf" width="100%" height="600px" />
                @endif

                {{-- <div class="student_simg">
                            <img src="{{ $invoices->document_image }}" class="">
                        </div> --}}

            </div>
            <div class="col-lg-8">
                {{-- <div class="text name_title">
                    <h4>{{ get_phrase('Name') }} : {{ $student_details->name }}</h4>
                    <h4>{{ get_phrase('Class') }} : {{ null_checker($student_details->class_name) }}</h4>
                    <h4>{{ get_phrase('Section') }} : {{ null_checker($student_details->section_name) }}</h4>
                    <h4>{{ get_phrase('Parent') }} : {{ null_checker($student_details->parent_name) }}</h4>
                    <h4>{{ get_phrase('Blood') }} : {{ null_checker(strtoupper($student_details->blood_group)) }}</h4>
                    <h4>{{ get_phrase('Contact') }} : {{ null_checker($student_details->phone) }}</h4>
                </div> --}}
            </div>
        </div>
    </div>
</section>
