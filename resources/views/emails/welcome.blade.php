{{ Html::style('css/app.css') }}
<div class="mail_confirm" >
    <center>
        <table>
            <tr>
                <td align="center" valign="top">
                    <table >
                        <tbody>
                            <tr>
                                <td>
                                    <h1>{{ trans('general/label.get_start') }}</h1>
                                    <p>{{ trans('general/message.active_register')}}
                                    {{ URL::to('/register/verify/' . $confirmation_code) }}.<br/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </center>
</div>
