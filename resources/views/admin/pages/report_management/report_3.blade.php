@extends('admin.master')
@section('content')
<!doctype html>

  <style>
      .form-1-new h3 {
    text-align: center;
}
.user-information,
.twonddataform,
.form-1-new{
    margin-top: 50px;
    margin-bottom: 50px;
}
.user-information {
    display: flex;
    justify-content: space-between;
}
  </style>
  <body>
      <div class="content">
           <div class="page-inner">
              <form>
            <div class="rel-26">
                <h3 style="text-align: center;">২০২১-২২ অর্থবছরের বাজেট বাস্তবায়ন অগ্রগতি</h3>
                <h5>১.১.১. সচিবালয়:</h5>
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <td rowspan="2"></td>
                            <td>বাজেট</td>
                            <td>লক্ষ্যমাত্রা/</td>
                            <td>১ম কোয়ার্টার</td>
                            <td>২য় কোয়ার্টার</td>
                            <td>৩য় কোয়ার্টার</td>
                            <td>৪র্থ কোয়ার্টার</td>
                            <td>(১ম-৪র্থ)  কোয়ার্টার</td>
                        </tr>
                        <tr>
                            <td>২০২১-২২</td>
                            <td>প্রকৃত ব্যয়</td>
                            <td>(জুলাই-সেপ্টেম্বর ২১)</td>
                            <td>(অক্টোবর-ডিসেম্বর ২১)</td>
                            <td>(জানুয়ারি-মার্চ ২২)</td>
                            <td>(এপ্রিল-জুন ২২)</td>
                            <td>(জুলাই ২১- জুন ২২)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="3"><input type="text" name="" id="" value="কর্মচারীদের প্রতিদান"></td>
                            <td rowspan="3"><input type="text" name="" id="" value="৫৯০০০"></td>
                            <td><input type="text" name="" id="" value="লক্ষ্যমাত্রা"></td>
                            <td><input type="text" name="" id="" value="১৭০৬৩"></td>
                            <td><input type="text" name="" id="" value="১২৯১৩"></td>
                            <td><input type="text" name="" id="" value="১২৬১৩"></td>
                            <td><input type="text" name="" id="" value="১৬৪১১"></td>
                            <td><input type="text" name="" id="" value="৫৯০০০"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id="" value="প্রকৃত ব্যয়"></td>
                            <td><input type="text" name="" id="" value="১৪৫৭২"></td>
                            <td><input type="text" name="" id="" value=""></td>
                            <td><input type="text" name="" id="" value=""></td>
                            <td><input type="text" name="" id="" value=""></td>
                            <td><input type="text" name="" id="" value="১৪৫৭২"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id="" value="শতকরা হার"></td>
                            <td><input type="text" name="" id="" value="85%"></td>
                            <td><input type="text" name="" id="" value="0%"></td>
                            <td><input type="text" name="" id="" value="0%"></td>
                            <td><input type="text" name="" id="" value="0%"></td>
                            <td><input type="text" name="" id="" value="25%"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="rel-26">
                <h5>১.১.২. স্বায়ত্তশাসিত ও অন্যান্য প্রতিষ্ঠান:</h5>
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <td rowspan="2">প্রতিষ্ঠানের নাম</td>
                            <td>বাজেট</td>
                            <td>লক্ষ্যমাত্রা/</td>
                            <td>১ম কোয়ার্টার</td>
                            <td>২য় কোয়ার্টার</td>
                            <td>৩য় কোয়ার্টার</td>
                            <td>৪র্থ কোয়ার্টার</td>
                            <td>(১ম-৪র্থ)  কোয়ার্টার</td>
                        </tr>
                        <tr>
                            <td>২০২১-২২</td>
                            <td>প্রকৃত ব্যয়</td>
                            <td>(জুলাই-সেপ্টেম্বর ২১)</td>
                            <td>(অক্টোবর-ডিসেম্বর ২১)</td>
                            <td>(জানুয়ারি-মার্চ ২২)</td>
                            <td>(এপ্রিল-জুন ২২)</td>
                            <td>(জুলাই ২১- জুন ২২)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="3"><input type="text" name="" id="" value="বাংলাদেশ ইনস্টিটিউট অব ক্যাপিটাল মার্কেট"></td>
                            <td rowspan="3"><input type="text" name="" id="" value="১০০০০০"></td>
                            <td><input type="text" name="" id="" value="লক্ষ্যমাত্রা"></td>
                            <td><input type="text" name="" id="" value="২৫০০০"></td>
                            <td><input type="text" name="" id="" value="২৫০০০"></td>
                            <td><input type="text" name="" id="" value="২৫০০০"></td>
                            <td><input type="text" name="" id="" value="২৫০০০"></td>
                            <td><input type="text" name="" id="" value="১০০০০০"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id="" value="প্রকৃত ব্যয়"></td>
                            <td><input type="text" name="" id="" value="২৯৮৭৫"></td>
                            <td><input type="text" name="" id="" value=""></td>
                            <td><input type="text" name="" id="" value=""></td>
                            <td><input type="text" name="" id="" value=""></td>
                            <td><input type="text" name="" id="" value="২৯৮৭৫"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id="" value="শতকরা হার"></td>
                            <td><input type="text" name="" id="" value="120%"></td>
                            <td><input type="text" name="" id="" value="0%"></td>
                            <td><input type="text" name="" id="" value="0%"></td>
                            <td><input type="text" name="" id="" value="0%"></td>
                            <td><input type="text" name="" id="" value="30%"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="rel-26">
                <h5>১.২.১  উন্নয়ন প্রকল্প (বার্ষিক উন্নয়ন কর্মসূচি বহির্ভূত-২১):</h5>
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <td rowspan="2">প্রকল্পের নাম</td>
                            <td>বাজেট</td>
                            <td>লক্ষ্যমাত্রা/</td>
                            <td>১ম কোয়ার্টার</td>
                            <td>২য় কোয়ার্টার</td>
                            <td>৩য় কোয়ার্টার</td>
                            <td>৪র্থ কোয়ার্টার</td>
                            <td>(১ম-৪র্থ)  কোয়ার্টার</td>
                        </tr>
                        <tr>
                            <td>২০২১-২২</td>
                            <td>প্রকৃত ব্যয়</td>
                            <td>(জুলাই-সেপ্টেম্বর ২১)</td>
                            <td>(অক্টোবর-ডিসেম্বর ২১)</td>
                            <td>(জানুয়ারি-মার্চ ২২)</td>
                            <td>(এপ্রিল-জুন ২২)</td>
                            <td>(জুলাই ২১- জুন ২২)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="3"><input type="text" name="" id="" value="বাংলাদেশে তৈরি পোশাক খাতের নিরাপত্তাজনিত সংস্কার ও পরিবেশগত বিশেষ উন্নয়ন সহায়তা কর্মসূচী"></td>
                            <td rowspan="3"><input type="text" name="" id="" value="১৮৬০০০০"></td>
                            <td><input type="text" name="" id="" value="লক্ষ্যমাত্রা"></td>
                            <td><input type="text" name="" id="" value="৩৬০০০০"></td>
                            <td><input type="text" name="" id="" value="৫০০০০০"></td>
                            <td><input type="text" name="" id="" value="৫০০০০০"></td>
                            <td><input type="text" name="" id="" value="৫০০০০০"></td>
                            <td><input type="text" name="" id="" value="১৮৬০০০০"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id="" value="প্রকৃত ব্যয়"></td>
                            <td><input type="text" name="" id="" value="০"></td>
                            <td><input type="text" name="" id="" value=""></td>
                            <td><input type="text" name="" id="" value=""></td>
                            <td><input type="text" name="" id="" value=""></td>
                            <td><input type="text" name="" id="" value="০"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id="" value="শতকরা হার"></td>
                            <td><input type="text" name="" id="" value="0%"></td>
                            <td><input type="text" name="" id="" value="0%"></td>
                            <td><input type="text" name="" id="" value="0%"></td>
                            <td><input type="text" name="" id="" value="0%"></td>
                            <td><input type="text" name="" id="" value="0%"></td>
                        </tr>
                    </tbody>
                </table>
                <h5>১.২.২  উন্নয়ন প্রকল্প (বার্ষিক উন্নয়ন কর্মসূচি-২২):</h5>
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <td rowspan="2">প্রকল্পের নাম</td>
                            <td>বাজেট</td>
                            <td>লক্ষ্যমাত্রা/</td>
                            <td>১ম কোয়ার্টার</td>
                            <td>২য় কোয়ার্টার</td>
                            <td>৩য় কোয়ার্টার</td>
                            <td>৪র্থ কোয়ার্টার</td>
                            <td>(১ম-৪র্থ)  কোয়ার্টার</td>
                        </tr>
                        <tr>
                            <td>২০২১-২২</td>
                            <td>প্রকৃত ব্যয়</td>
                            <td>(জুলাই-সেপ্টেম্বর ২১)</td>
                            <td>(অক্টোবর-ডিসেম্বর ২১)</td>
                            <td>(জানুয়ারি-মার্চ ২২)</td>
                            <td>(এপ্রিল-জুন ২২)</td>
                            <td>(জুলাই ২১- জুন ২২)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="3"><input type="text" name="" id="" value="পুঁজিবাজার উন্নয়ন কর্মসূচি-৩"></td>
                            <td rowspan="3"><input type="text" name="" id="" value="১০০"></td>
                            <td><input type="text" name="" id="" value="লক্ষ্যমাত্রা"></td>
                            <td><input type="text" name="" id="" value="২৫"></td>
                            <td><input type="text" name="" id="" value="২৫"></td>
                            <td><input type="text" name="" id="" value="২৫"></td>
                            <td><input type="text" name="" id="" value="২৫"></td>
                            <td><input type="text" name="" id="" value="১০০"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id="" value="প্রকৃত ব্যয়"></td>
                            <td><input type="text" name="" id="" value="৪৫৭"></td>
                            <td><input type="text" name="" id="" value=""></td>
                            <td><input type="text" name="" id="" value=""></td>
                            <td><input type="text" name="" id="" value=""></td>
                            <td><input type="text" name="" id="" value="৪৫৭"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id="" value="শতকরা হার"></td>
                            <td><input type="text" name="" id="" value="1828%"></td>
                            <td><input type="text" name="" id="" value="0.00%"></td>
                            <td><input type="text" name="" id="" value="0%"></td>
                            <td><input type="text" name="" id="" value="0%"></td>
                            <td><input type="text" name="" id="" value="457%"></td>
                        </tr>
                    </tbody>
                </table>
                <h5>১.৩.  মোট পরিচালন ও উন্নয়ন ব্যয়:</h5>
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <td rowspan="2">মন্ত্রণালয়/বিভাগ</td>
                            <td>বাজেট</td>
                            <td>লক্ষ্যমাত্রা/</td>
                            <td>১ম কোয়ার্টার</td>
                            <td>২য় কোয়ার্টার</td>
                            <td>৩য় কোয়ার্টার</td>
                            <td>৪র্থ কোয়ার্টার</td>
                            <td>(১ম-৪র্থ)  কোয়ার্টার</td>
                        </tr>
                        <tr>
                            <td>২০২১-২২</td>
                            <td>প্রকৃত ব্যয়</td>
                            <td>(জুলাই-সেপ্টেম্বর ২১)</td>
                            <td>(অক্টোবর-ডিসেম্বর ২১)</td>
                            <td>(জানুয়ারি-মার্চ ২২)</td>
                            <td>(এপ্রিল-জুন ২২)</td>
                            <td>(জুলাই ২১- জুন ২২)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="3"><input type="text" name="" id="" value="আর্থিক প্রতিষ্ঠান বিভাগ"></td>
                            <td rowspan="3"><input type="text" name="" id="" value="২৫৫৯৪৭০০"></td>
                            <td><input type="text" name="" id="" value="লক্ষ্যমাত্রা"></td>
                            <td><input type="text" name="" id="" value="৩৪৫২৬৯৯"></td>
                            <td><input type="text" name="" id="" value="৬৪৪৭৬৩৪"></td>
                            <td><input type="text" name="" id="" value="৭৭৬০৭৭৫"></td>
                            <td><input type="text" name="" id="" value="৭৯৩৩৬১২"></td>
                            <td><input type="text" name="" id="" value="২৫৫৯৪৭০০"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id="" value="প্রকৃত ব্যয়"></td>
                            <td><input type="text" name="" id="" value="২০১৭১৯৭"></td>
                            <td><input type="text" name="" id="" value="০"></td>
                            <td><input type="text" name="" id="" value="০"></td>
                            <td><input type="text" name="" id="" value="০"></td>
                            <td><input type="text" name="" id="" value="২০১৭১৯৭"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="" id="" value="শতকরা হার"></td>
                            <td><input type="text" name="" id="" value="58%"></td>
                            <td><input type="text" name="" id="" value="0%"></td>
                            <td><input type="text" name="" id="" value="0%"></td>
                            <td><input type="text" name="" id="" value="0%"></td>
                            <td><input type="text" name="" id="" value="8%"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </form>
      </div>
      </div>
@endsection