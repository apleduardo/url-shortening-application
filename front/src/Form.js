import React from "react";
import { request, gql } from 'graphql-request'

export default class Form extends React.Component {
    state = { url: '', value:'' };
      
    handleSubmit = async (event) => {
      event.preventDefault();

      const query = gql`mutation{createShortner(input:{originalUrl:"${this.state.url}"}){url}}` 
      request('http://localhost/graphql/', query)
      .then(
        (data) => { 
          this.setState({ value: data.createShortner.url });
          console.log(data)
        }
        )
      
      console.log(query);
      this.setState({ url: '' });
    };
  
    render() {
      return (
        <>
          <form onSubmit={this.handleSubmit}>
              <input 
                type="text" 
                value={this.state.url}
                onChange={event => this.setState({ url: event.target.value })}
                placeholder="URL Here!!!!!!" 
                required 
              />
              <button>Go!</button>
            </form>
            <a href={this.state.value}>{this.state.value}</a>
          </>
        );
      }
  }