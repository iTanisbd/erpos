# ERPOS Documentation

Document: Repair Ticket Design
Version: 1.0
Status: Draft
Last Updated: 2026-08-06
Author: Md. Anisur Rahman

---

# Purpose

The Repair Ticket is the core business entity of ERPOS.

Every service request starts by creating a Repair Ticket.

A Repair Ticket connects the customer, device, technician, repair progress, payments, storage location, and delivery information.

---

# Business Flow

Customer

↓

Receive Device

↓

Create Repair Ticket

↓

Assign Technician

↓

Diagnosis

↓

Repair

↓

Payment

↓

Delivery

↓

Repair History

---

# Main Information

## Customer

- Customer
- Phone Number

---

## Device Information

- Device Type
- Brand
- Model
- IMEI
- Serial Number
- Color

---

## Repair Information

- Ticket Number
- Status
- Priority
- Technician
- Reported Problems
- Diagnosis
- Estimated Cost
- Advance Payment
- Due Amount
- Delivery Date

---

## Storage

- Rack
- Drawer
- Box
- Shelf

---

## Timeline

- Received
- Assigned
- In Progress
- Waiting Parts
- Completed
- Delivered

---

## Future Modules

The following information will be managed using separate tables.

- Payments
- Repair Problems
- Timeline
- Notifications
- Activity Logs
- Attachments
- Warranty
- Spare Parts
- Stock Usage

---

# Relationships

Customer

↓

Repair Ticket

├── Problems

├── Technician

├── Payments

├── Timeline

├── Storage

└── Attachments

---

# Design Principles

- One Repair Ticket belongs to one Customer.
- One Customer can have many Repair Tickets.
- One Repair Ticket can contain multiple Problems.
- One Repair Ticket can have multiple Payments.
- One Repair Ticket can have multiple Timeline records.
- Business logic should remain outside the database.
- Database should remain scalable and maintainable.

---

# Future Scalability

This design supports:

- Mobile Repair
- Laptop Repair
- Desktop Computer Repair
- Printer Repair
- CCTV Service
- Electronics Service
- Home Appliance Service
