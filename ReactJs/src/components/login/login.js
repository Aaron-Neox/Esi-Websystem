import React from "react" ;
import userImage from "../../components/res/logo.svg" ;
import {login} from './UserFunction'


export default class Login extends React.Component {

    constructor(props){
        super()
        this.state={
          email:'',
          motpass:'',
          errors:{}
        }
        this.onChange=this.onChange.bind(this)
        this.onSubmit=this.onSubmit.bind(this)
      }
     
    
      onChange(e){
        this.setState({[e.target.name]:e.target.value})
      }
      onSubmit(e){
        e.preventDefault()
        const user = {
          email:this.state.email,
          motpass:this.state.motpass,
        }
        login(user)
       
       
      }

    render(){
      if(!localStorage.getItem('user')){
        return(
          <form 
          onSubmit={this.onSubmit} >
          <div className="main-container">
              <div className="header">Login portal</div>
              <div className="image">
                  <img src={userImage} alt="login image"/>
              </div>
              <div className="form">
                  <div className="form-group">
                      <label htmlFor="email">Mail</label>
                      <input name="email"
                              value={this.state.email}
                              onChange={this.onChange} className="input-form" type="email" id="mail"  placeholder="email" />
                  </div>
                  <div className="form-group">
                      <label htmlFor="password">Password</label>
                      <input name="motpass"
                            value={this.state.motpass}
                               onChange={this.onChange} className="input-form" type="password" id="pass"  placeholder="password" />
                  </div>
                  <button htmlType="submit" className="button-log" >Login</button>
              </div>
          </div>
          </form>
          )
      }else{
        window.location="/"
        return('')
      }
        
    }
}

