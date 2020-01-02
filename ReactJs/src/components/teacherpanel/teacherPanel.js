import React from "react" ;
import ReactDOM from 'react-dom' ;
import LogImg from "../../components/res/teacher.svg" ;


const list =["tthis is the fist  zzzzzzzzzzzzzzzzzzzzzzzzzzzz zzzzzzzzzzzzzzzz " , "you besddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffng good, so you better be good"];
const list3 =["tthis is the fist mail2 " , "hey this one works bad"];
const list4 =["tthis is the fist mail3 " , "you better be sooo fking good, so you better be goodxx"];
const list5=["tthis is the fist mail4 " , "you better be sooo fking good, so you better be good"];
const list6 =["tthis is the fist mail5 " , "you better be sooo fking good, so you better be good"];
const list7=["tthis is the fist mail6 " , "you better be sooo fking good, so you better be good"];
const list8=["tthis is the fist mail7 " , "you better be sooo fking good, so you better be good"];
const list2 = [list , list8 , list3 , list4, list5, list6, list7 ];
export class TeacherPanel extends React.Component {
    constructor(props){
        super(props);
        this.state = {MsgShowcase : list};

    }

    showmessage(indexmessage) {
        this.setState({
            MsgShowcase : list2[indexmessage]
        })
            

    }



    render(){
        return(
            <div className="base-container-t">
                        <div className="user-header">
                            <div className="imageusr">
                                <img src={LogImg} alt="logo" />
                            </div>
                            <div className="username">Usernamedummy</div>
                            <button className="button-out-t" onClick={this.logout.bind(this)}>Log out</button>
                        </div>
                        <div className="Two-container-t">
                            <div className="list-buttons">
                            <div className="title">Administration messages</div>
                                <ol>
                                    {list2.map(messagetitle => {
                                        return(
                                            <li className="list-item" key={messagetitle[0]}>
                                                <div>
                                                    <button className="list-button"
                                                    onClick=
                                                    {() => this
                                                    .showmessage(list2.indexOf(messagetitle))
                                                    }>
                                                        {messagetitle[0]}
                                                    </button>
                                                </div>
											</li>
                                        )
                                    })}
                                </ol>
                            </div>
                            <div className="mail-preview">
                                <div className="subject">
                                    {this.state.MsgShowcase[0]}
                                </div>
                                <div>-----------------------------------</div>
                                <div className="Mailtext">
                                    {this.state.MsgShowcase[1]}
                                </div>
                            </div>
                        </div>
                    </div>
        );
    }

}