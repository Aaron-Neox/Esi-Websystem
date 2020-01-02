import React from "react" ;
import ReactDOM from 'react-dom' ;
import LoginUser from "../../components/res/gg.png" ;
import editor from "../../components/res/listeditor.svg" ;
import mailcomposer from "../../components/res/composer.svg";
import Mail from "../mailcomposer/mailcomposer";
import ListEditor from '../listeditor/listeditor' ;
import "../style.css" ;
import { 
    BrowserRouter as Router
    ,Switch, Route, Link } 
    from "react-router-dom";
export default class Panel extends React.Component {
    constructor(props){
        super(props);
        const name = this.props.emailadr;
        
        this.state = {userName : name.substring(0 , name.indexOf("@" , 0))}

    }

   /* GoMSG(){
        //here to go to the message composer
        const Mailer =(
            <div className="App2">
                <div>
                    <Mail mailuser={this.props.emailadr}/>
                </div>
        </div>
        )
            ReactDOM.render(Mailer , document.getElementById('app'));
    }*/

    LogUserOut(){
        localStorage.removeItem('user')
        window.location="/login"
        
    }

    /*ListEditor(){
        //go to the list editor
        const Editor =(
            <div className="App2">
                <div>
                    <ListEditor mailuser={this.props.emailadr}/>
                </div>
            </div>
        )
            ReactDOM.render(Editor , document.getElementById('app'));
    }*/

    render(){
        if(localStorage.getItem('user')){
            return(
                <Switch>
                    <Route path="/student">
                        <ListEditor/>
                    </Route>
                    <Route path="/teacher">
                        <Mail/>
                    </Route>
                    <Route path="/">
                        <div className="base-container">
                        <div className="section-one">
                            <div className="title">List Editor</div>
                            <div className="image">
                                <img src={mailcomposer} alt="logo" />
                            </div>
                            <div className="description">This option will help you add or remove the students list as you wish.</div>
                            <Link to="/student">
                            <button className="button" /*onClick={this.ListEditor.bind(this)}*/>
                                Edit the students list
                            </button>
                            </Link> 
                        </div>
                        <div className="section-one">
                            <div className="title">Teachers Manager</div>
                            <div className="image">
                            <img src={editor} alt="logo" />
                            </div>
                            <div className="description">This option gives you the ability to manage the teachers list</div>
                            <Link to="/teacher">
                            <button className="button" /*onClick={this.GoMSG.bind(this)}*/>
                            Add/Remove teacher  
                            </button>
                            </Link>
                        </div>
                        <div className="user-log">
                            <div className="user-image">
                                <img id="user" src={ LoginUser} alt="logo" />
                            </div>
                            <div className="username">{this.state.userName}</div>
                            <div className="email"> {this.props.emailadr}</div>
                            <button className="button-out" onClick={this.LogUserOut.bind(this)}>Log out</button>
                        </div>
                    </div>
                    </Route>
                </Switch>
               
                )
        }else{
            window.location="/login"
            return('')
        }
            /*if(this.props.rater == "one"){*/
               
            /*}else {
                return(
                    <div className="App">
                        <TeacherPanel />
                    </div>
                    )
            }*/
            
        }
        
}