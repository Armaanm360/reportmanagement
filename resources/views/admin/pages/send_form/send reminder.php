

                                                    @if ($row->status == 1)
                                                        <form action="" id="remind_form" method="POST">
                                                            @csrf
                                                            <input type="hidden" id="rem_form_id" name="rem_form_id"
                                                                value="{{ $row->sub_form_id }}">
                                                            <input type="hidden" id="" name="rem_id_sender"
                                                                value="{{ $row->sender_user_id }}">
                                                            <input type="hidden" id="" name="rem_id_reciver"
                                                                value="{{ $row->reciever_user_id }}">
                                                            {{-- <button class="btn-primary btn-sm" id="btn_change">
                                                                {{ __('Send Reminder') }}
                                                            </button> --}}
                                                        </form>
                                                    @endif